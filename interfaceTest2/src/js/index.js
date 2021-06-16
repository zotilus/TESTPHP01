class Parallax  {

    // @param {HTMLElement} element

    constructor(element){
        this.element =  element
        this.ratio = parseFloat(element.dataset.Parallax);
    }

        static bind(){
            return Array.from(document.querySelectorAll("[data-parallax]")).map((element) => {
                return new Parallax(element)

            })
        }
    }

    

Parallax.bind();


 