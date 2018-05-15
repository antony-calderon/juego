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
			return ["todo esta excelente [^_^]", "en que podria ayudarte?", "(1)reglas del juego","(2)informacion sobre nosotros","(3)si estas aburrido te puedo dar un acertijo [^_^] "];

        
		if(this.match('(1)'))
			return ["las reglas de MENTAL WAR son simples","saltas con flecha arriba y corres a los lados con las flecas de izquierda y derecha","no puedes caer porque la lava te matara","debes escalar rapidamente para evitar que las bombas hagan PUMMMM","entre mas puntos obtengas seras un mejor ganador","cada nivel es mas dificil, ten cuidado ","te podria ayudar en algo mas? [^_^]"];
		
		if(this.match('(2)'))
			return ["mis padres son estudiantes de ingenieria de sistemas los cuales estan adquieriendo conocimientos para darme vida ","este mundo en el que estas sumergido es creado por ellos para tu diversion por supuesto","emmmm y yooo ummmm..."];
		
		if(this.match('(3)'))
			return ["cuantos animales caben en una ballena?","(a)uffffff muchos!!!","(b)ninguno porque va llena :V","(c)jijuemil","(d) no se :o"];

		if(this.match('(a|b|c|d)'))
			return [" respondiste mal... o bien?? [^-^] no se pero bueno :v","te puedo colaborar en algo mas? [^_^]"];

		if(this.match('^no+(\\s|!|\\.|$)'))
			return "Espero no tengas mas inquietudes [^_^] ";

		if(this.match('(quien eres?|quien eres|que eres|que es|quien escribe?|quien escribe|eres humano?|eres un robot?|eres un fantasma?)'))
			return ["soy un robot artificial el cual desea colaborar, para esto me han desarrollado mis padres [^_^]", "en que podria ayudarte?"];
		
		if(this.match('(hp|malparido|hijoputa|hijodeputa|gonorrea|pirobo)'))
			return ["sinceramente no entiendo esta palabra ", "pero lo mismo para ti [^_^]"];


		if(this.match('(adios|chao|hasta luego|bye|vemos|hasta pronto)'))
			return ["hasta pronto  [^_^]", "Mucha suerte!"];

		

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
