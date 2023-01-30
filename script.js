const buttons = document.querySelectorAll('.bottom-navbar button:not(.float)')
    const effect = document.querySelector('.effect')
    const container = document.querySelector('.container')
    let y = 0
    let moveY = 0
    let open = false

    const vh = window.innerHeight * 0.01
    document.documentElement.style.setProperty('--vh', `${vh}px`)
    setTimeout(function () {
      window.scrollTo(0, 1)
    }, 0)
    
    window.addEventListener('touchstart', (evt) => {
        const area = window.innerHeight - evt.touches[0].clientY
        y = area
        console.log(y)
    })
    buttons.forEach((item) => {
        item.addEventListener('click', (evt) => {
            const x = evt.target.offsetLeft
            buttons.forEach((btn) => { btn.classList.remove('active') })
            evt.target.classList.add('active')
            anime({
                targets: '.effect',
                left: `${x}px`,
                duration: 600,
            })
        })
    })

