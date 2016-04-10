# Set this to the root of your project when deployed:
http_path = "/"
css_dir = "css"
sass_dir = "sass"
images_dir = "img"
javascripts_dir = "js"
output_style = "expanded"

Encoding.default_external = "utf-8"

output_style = :expanded

on_stylesheet_saved do |filename|
	if File.exists?(filename)
		minifyFile = filename.gsub('.css', '.min.css')
		FileUtils.cp filename, minifyFile
		file = File.read minifyFile
		colon = ':'
		semicolon = ';'
		comma = ','
		open_brace = ' {'
		close_brace = '}'
		file.gsub!(/\n/,' ')
		file.gsub!(/\/\*.*?\*\//m,'')
		file.gsub!(/\s*:\s*/,colon)
		file.gsub!(/\s*;\s*/,semicolon)
		file.gsub!(/\s*,\s*/,comma)
		file.gsub!(/\s*\{\s*/,open_brace)
		file.gsub!(/\s*\}\s*/,close_brace)
		file.gsub!(/\s\s+/,' ')
		File.open(minifyFile, 'w+') do |f|
			f << file
		end
	end
end
