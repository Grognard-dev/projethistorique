class Carousel {
  /**

   * @callback moveCallback
   * @param {number} index
   */

  /**
   * @param {HTMLElement} element
   * @param {Object} options
   * @param {Object} [options.slidesToScroll=1] 
   * @param {Object} [options.slidesVisible=1] 
   * @param {boolean} [options.loop=false] 
   * @param {boolean} [options.pagination=false]
   * @param {boolean} [options.navigation=true]
   */
  constructor (element, options = {}) {
    this.element = element
    this.options = Object.assign({}, {
      slidesToScroll: 1,
      slidesVisible: 1,
      loop: false,
      pagination: false,
      navigation: true
    }, options)
    let children = [].slice.call(element.children)
    this.isMobile = true
    this.currentItem = 0
    this.moveCallbacks = []

    // Modification du DOM
    this.root = this.createDivWithClass('carousel')
    this.container = this.createDivWithClass('carousel__container')
    this.root.setAttribute('tabindex', '0')
    this.root.appendChild(this.container)
    this.element.appendChild(this.root)
    this.items = children.map((child) => {
      let item = this.createDivWithClass('carousel__item')
      item.appendChild(child)
      this.container.appendChild(item)
      return item
    })
    this.setStyle()
    if (this.options.navigation) {
      this.createNavigation()
    }
    if (this.options.pagination) {
      this.createPagination()
    }

    /*evenement droite - gauche*/
    this.moveCallbacks.forEach(cb => cb(0))
    this.onWindowResize()
    window.addEventListener('resize', this.onWindowResize.bind(this))
    this.root.addEventListener('keyup', e => {
      if (e.key === 'ArrowRight' || e.key === 'Right') {
        this.next()
      } else if (e.key === 'ArrowLeft' || e.key === 'Left') {
        this.prev()
      }
    })
  }

 /*dimension element carousel*/
  setStyle () {
    let ratio = this.items.length / this.slidesVisible
    this.container.style.width = (ratio * 100) + "%"
    this.items.forEach(item => item.style.width = ((100 / this.slidesVisible) / ratio) + "%")
  }

 /* fleche*/
  createNavigation () {
    let nextButton = this.createDivWithClass('carousel__next')
    let prevButton = this.createDivWithClass('carousel__prev')
    this.root.appendChild(nextButton)
    this.root.appendChild(prevButton)
    nextButton.addEventListener('click', this.next.bind(this))
    prevButton.addEventListener('click', this.prev.bind(this))
    if (this.options.loop === true) {
      return
    }
    this.onMove(index => {
      if (index === 0) {
        prevButton.classList.add('carousel__prev--hidden')
      } else {
        prevButton.classList.remove('carousel__prev--hidden')
      }
      if (this.items[this.currentItem + this.slidesVisible] === undefined) {
        nextButton.classList.add('carousel__next--hidden')
      } else {
        nextButton.classList.remove('carousel__next--hidden')
      }
    })
  }

  /**
   * ordre des pages
   */
  createPagination () {
    let pagination = this.createDivWithClass('carousel__pagination')
    let buttons = []
    this.root.appendChild(pagination)
    for (let i = 0; i < this.items.length; i = i + this.options.slidesToScroll) {
      let button = this.createDivWithClass('carousel__pagination__button')
      button.addEventListener('click', () => this.gotoItem(i))
      pagination.appendChild(button)
      buttons.push(button)
    }
    this.onMove(index => {
      let activeButton = buttons[Math.floor(index / this.options.slidesToScroll)]
      if (activeButton) {
        buttons.forEach(button => button.classList.remove('carousel__pagination__button--active'))
        activeButton.classList.add('carousel__pagination__button--active')
      }
    })
  }

  /**
   *
   */
  next () {
    this.gotoItem(this.currentItem + this.slidesToScroll)
  }

  prev () {
    this.gotoItem(this.currentItem - this.slidesToScroll)
  }

  /**
   * mouvement carrousel
   * @param {number} index
   */
  gotoItem (index) {
    if (index < 0) {
      if (this.options.loop) {
        index = this.items.length - this.slidesVisible
      } else {
        return
      }
    } else if (index >= this.items.length || (this.items[this.currentItem + this.slidesVisible] === undefined && index > this.currentItem)) {
      if (this.options.loop) {
        index = 0
      } else {
        return
      }
    }
    let translateX = index * -100 / this.items.length
    this.container.style.transform = 'translate3d(' + translateX + '%, 0, 0)'
    this.currentItem = index
    this.moveCallbacks.forEach(cb => cb(index))
  }

  /**
   * écouteur du deplacement caroussel 
   * @param {moveCallback} cb
   */
  onMove (cb) {
    this.moveCallbacks.push(cb)
  }

  /**
   * responsive
   */
  onWindowResize () {
    let mobile = window.innerWidth < 678
    if (mobile !== this.isMobile) {
      this.isMobile = mobile
      this.setStyle()
      this.moveCallbacks.forEach(cb => cb(this.currentItem))
    }
  }

  /**
   * créateur de div
   * @param {string} className
   * @returns {HTMLElement}
   */
  createDivWithClass (className) {
    let div = document.createElement('div')
    div.setAttribute('class', className)
    return div
  }

  /**scroll sur mobile
   * @returns {number}
   */
  get slidesToScroll () {
    return this.isMobile ? 1 : this.options.slidesToScroll
  }

  /**
   * @returns {number}
   */
  get slidesVisible () {
    return this.isMobile ? 1 : this.options.slidesVisible
  }

}

let onReady = function () {

  new Carousel(document.querySelector('#carousel1'), {
      slidesVisible: 4,
      slidesToScroll: 2,
      loop: true
  })

}

if (document.readyState !== 'loading') {
  onReady()
}
document.addEventListener('DOMContentLoaded', onReady);
