const parentContainer =  document.querySelector('.about-col');

parentContainer.addEventListener('click', event=>{

    const current = event.target;

    const isReadMoreBtn = current.className.includes('navbtn');

    if(!isReadMoreBtn) return;

    const currentText = event.target.parentNode.querySelector('.moreText');

    currentText.classList.toggle('read-more-text--show');

    current.textContent = current.textContent.includes('Read More') ? "Read Less..." : "Read More...";

})