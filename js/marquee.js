window.onload = () => {
    const marquee = document.querySelector('.marquee')
    if (marquee) {
      const marquees = new Array(40).fill(null)
      marquees.forEach(el => {
        marquee.parentNode.append(marquee.cloneNode(true));
      })
    }
  }
  