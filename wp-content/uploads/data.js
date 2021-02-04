var botName = "𐐚OŦ",
botAvatar = "https://hraul.es/wp-content/uploads/2020/02/RR.png",
conversationData = {"homepage": {1: { "statement": [ 
"¡Hola! No soy humano pero puedo hablar, seré tu asistente.", 
"Tengo solo un par de preguntas.", 
"¿Cómo te llamas?", 
], "input": {"name": "name", "consequence": 1.2}},1.2:{"statement": function(context) {return [ 
"Encantado de conocerte, " + context.name  + "!", 
"Como puedes ver, nuestra web se lanzará muy pronto.", 
"Lo sé, estás muy emocionado por verla, pero necesitamos unos días más para terminarla.", 
"¿Te gustaría ser el primero en verla?", 
];},"options": [{ "choice": "Claro!","consequence": 1.4},{ 
"choice": "No creo...","consequence": 1.5}]},1.4: { "statement": [ 
"¡Genial! Por favor, deja aquí tu correo electrónico y te enviaré un mensaje cuando esté lista.", 
], "email": {"email": "email", "consequence": 1.6}},1.5: {"statement": function(context) {return [ 
"Lamento escuchar eso, " + context.name  + " :( Nos vemos la próxima vez…", 
];}},1.6: { "statement": [ 
"¡De acuerdo! ¡Gracias y te veo pronto por aquí!", 
"¡Que tengas un buen día!", 
]}}};