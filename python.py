def is_cool(name):
	return ("I" in name)
	
def person(name):
	if is_cool(name):
		print name, "am cool."
	else: 
		print name, "are not cool."
		
person("I")
person("You")




