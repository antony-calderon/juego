function chatBot() {
	
	// current user input
	this.input;
	
	/**
	 * respondTo
	 * 
	 * return nothing to skip response
	 * return string for one response
	 * return array of strings for multiple responses
	 * 
	 * @param input - input chat string
	 * @return reply of chat-bot
	 */
	this.respondTo = function(input) {
	
		this.input = input.toLowerCase();
		
		if(this.match('(hi|hello|hey|hola|howdy|hello|ie|ola)(\\s|!|\\.|$)'))
			return "Hola player [^_^] ..!!!";

		if(this.match('(como estas?|como estas|que tal|como va todo|que onda|que honda)'))
			return ["todo esta excelente [^_^]", "en que podria ayudarte? tengo las siguientes opciones", "(1)reglas del juego","(2)contacto de mis padres","(3)informacion a cerca del juego","(3)quienes somos","(4)si estas aburrido te puedo dar un acertijo [^_^] "];

		if(this.match('(reglas|me podrias decir las reglas?|cuales son las reglas|reglas por favor|reglas)'))
			return ["las reglas son blablablbalblbalbalblablablalbalbalbalblablalbalblalballbalbalalba [^_^]"];
		
		if(this.match('(quien eres?|quien eres|que eres|que es|quien escribe?|quien escribe|eres humano?|eres un robot?|eres un fantasma?)'))
			return ["soy un robot artificial el cual desea colaborar, para esto me han desarrollado mis padres [^_^]", "en que podria ayudarte?"];
        
        if(this.match('(que ofreces?|que opciones tienes|opciones|probabilidades|que me puedes dar?)'))
			return ["te puedo decir: ", "reglas del juego","contacto de mis padres","informacion a cerca del juego","quienes somos","o si estas aburrido te puedo dar un acertijo [^_^] "];
		
		if(this.match('(1)'))
			return ["las reglas son blablablbalblbalbalblablablalbalbalbalblablalbalblalballbalbalalba ","te puedo ayudar en algo mas? [^_^]"];
		
		if(this.match('(2)'))
			return ["el contacto de mis padres es  ","te puedo ayudar en algo mas? [^_^]"];
		
		if(this.match('(3)'))
			return ["el juego es bla ","te puedo ayudar en algo mas? [^_^]"];
		if(this.match('(4)'))
			return [" somos bla ","te puedo ayudar en algo mas? [^_^]"];

		if(this.match('(5)'))
			return [" tu acertijo es: ","te puedo ayudar en algo mas? [^_^]"];

		if(this.match('^no+(\\s|!|\\.|$)'))
			return "Espero no tengas mas inquietudes [^_^] ";
		
		if(this.match('(adios|chao|hasta luego|bye|vemos|hasta pronto)'))
			return ["hasta pronto  [^_^]", "Mucha suerte!"];
		
		if(this.match('(hp|malparido|hijoputa|hijodeputa|gonorrea|pirobo)'))
			return ["sinceramente no entiendo esta palabra ", "pero lo mismo para ti [^_^]"];

		if(this.match('(gracias)'))
			return ["Con todo gusto!!!!"];
		
		if(this.input == 'noop')
			return;
		
		return "no tengo informacion sobre ("+input + ") pero si deseas te puedes comunicar con mis padres [^_^]";
	}
	
	/**
	 * match
	 * 
	 * @param regex - regex string to match
	 * @return boolean - whether or not the input string matches the regex
	 */
	this.match = function(regex) {
	
		return new RegExp(regex).test(this.input);
	}
}
