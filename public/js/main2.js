"use strict"

// Clase elemento snackbar
class Snackbar {

	// Constructor
	/* Lo que hace es recibir un id para poder seleccionar el elemento del DOM y asignarlo a la variable
	 * element que es propia de la clase, por ello es precedida de this.
	 */
	constructor(id) {
		this.element = document.querySelector(`#${id}`)
	}

	// Funcion para mostrar snackbar
	/* Su funcion es tomar el elemento antes creado y agregarle la clase del css llamada show a su lista de
	 * clases actuales.
	 */
	showSnackbar() {
		this.element.classList.add("show")
	}

	// Funcion para ocultar snackbar
	/* Su funcion es contraria a la anterior, en donde lo que se hace es remover la clase show, ya que por
	 * defecto el elemento snackbar tiene la propiedad visibility con el valor hidden.
	 */
	fadeSnackbar() {
		this.element.classList.remove("show")
	}

	// Funcion para crear nodo de texto
	// Recibe un parametro texto el cual crea y retorna para ser usado.
	createText(text) {
		let p = document.createElement("p")
		p.innerHTML = text
		return p
	}

	// Funcion para vaciar snackbar
	getSnackEmpty() {
		this.element.innerHTML = ""
	}

	// Funcion para asignar contenido al snackbar
	/* Su proceso es llamar a la funcion que vacia el snackbar y tras de eso agregarle un elemento nodo
	 * el cual sera el resultado de crear un nodo de texto.
	 */
	setSnackContent(text) {
		this.getSnackEmpty()
		this.element.appendChild(this.createText(text))
	}

	// Funcion generar notificacion
	/* Es la funcion ensambladora del proceso que hace que el snackbar sea visible con los datos que deseamos,
	 * de forma tal que asigna el contenido al snackbar, muestra el snackbar y genera un temporizador para
	 * ocultarlo de nuevo, con cierto tiempo.
	 */
	doNotify(text) {
		this.setSnackContent(text)
		this.showSnackbar()
		setTimeout(() => {
			this.fadeSnackbar()
		}, 3000)// Tiempo de temporizador en milisegundos 1000 = 1 segundo

	}
}

// Clase del boton que activa el snackbar y hereda del snackbar
class btnSnackbar extends Snackbar {

	// Constructor
	// Recive como parametros el id del snackbar y el del boton
	constructor(idSnackbar, idBtn) {
		// Llama al constructor de la clase padre o la del snackbar mejor dicho enviandole el respectivo id
		super(idSnackbar)
		// Asigna a el atributo button el elemento del DOM obtenido por el id pasado como argumento
		this.button = document.querySelector(`#${idBtn}`)

		// Event listeners
		this.button.addEventListener("click", (e) => {
			// Llama a la funcion notificadora con el texto entre parentesis
			// Este texto puede ser asignado dinamicamente, por ejemplo con la entrada del usuario asi:
			//this.doNotify(prompt("Digita el texto para mostrar en el snackbar"))
			// Para probar la anterior linea solo quitale los comentarios y agregaselos a la siguiente linea
			this.doNotify("¿Me has activado?")
		})
	}
}

// Instanciar un objeto de la clase btnSnackbar pasandole los respectivos argumentos
var activeSnackbar = new btnSnackbar("snackbar", "btnActSnack")