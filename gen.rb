#!/usr/bin/env ruby
require 'pathname'
require 'fileutils'
require 'set'

# html <!-- include file arg=Value arg2="value two" -->s
def gen(inname, env={})
	contents = File.read(inname)

	contents.gsub! /<!-- env (\w+) -->/ do
		env[$1]
	end

	contents.gsub /^([\t ]+?)<!-- include (.+?) -->/ do
		space = $1
		args  = $2.scan /\w+=".+?"|[\S]+/

		file, *env = args
		env = env.map{|x| x.match(/(\w+)="?(.+?)(?:"|$)/).to_a[1..-1] }.to_h

		(gen file, env).gsub /^/, space
	end
end

# path a -> path b -> path a/../b
def rto(a, b)
	Pathname.new(File.join a, '..', b).cleanpath.to_s
end

# string -> first filename found in quotes
def filename(string)
	string.gsub! "'", '"'
	string[%r{(?<=")[\./]*[\w\.-]+(/[\w\.-]+)*\.[a-z\.]+(?=")}i] # (?:\.|'|")
end

# recursively copies+generates relative files based on dependencies found in file_contents
$visited = Set.new
def copy_dependencies(inname, outname, file_contents)
	dependencies = [/src=".+?"/, /href=".+?"/, /url *\(.+?\)/]
		.flat_map{|pat| file_contents.scan(pat).filter_map{|x| filename x}}

	for file in dependencies
		from = rto inname,  file
		to   = rto outname, file

		next if $visited === to
		$visited << to

		next run(from, to) if from =~ /\.html/i
		copy_dependencies(from, to, File.read(from)) if from =~ /\.css$/i

		puts "#{from} -> #{to}"
		todir = rto to, ''

		FileUtils.mkdir_p todir
		FileUtils.cp from, todir
	end
end

# relocates+generates inname (and its dependencies) to outname
def run(inname, outname)
	generated = gen inname

	copy_dependencies inname, outname, generated

	File.write outname, generated
end

run (ARGV[0] or 'index.html'), (ARGV[1] or 'docs/index.html')