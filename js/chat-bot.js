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
		
		if(this.match('(hi|hello|hey|hola|howdy)(\\s|!|\\.|$)'))
			return "Hola estudiante..!!!";
		
		if(this.match('hora[^ ]* up') || this.match('ora') || this.match('horario'))
			return "que modulo?";
		
		if(this.match('aplicaciones(ol)+') || this.match('(web)+(W|$)') || this.match('web') || this.match('jmm'))
			return ["Puede ingresar a la pagina y consultar fecha", "algun otro"];
		
		if(this.match('^no+(\\s|!|\\.|$)'))
			return "Espero no tengas mas inquietudes";
		
		if(this.match('(cya|bye|see ya|ttyl|talk to you later)'))
			return ["alright, see you around", "good teamwork!"];
		
		if(this.match('(dumb|stupid|is that all)'))
			return ["hey i'm just a proof of concept", "you can make me smarter if you'd like"];
		if(this.match('(gracias)'))
			return ["Con todo gusto!!!!"];
		
		if(this.input == 'noop')
			return;
		
		return input + " no tengo informacion pero se puede comunicar con 123458?";
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
