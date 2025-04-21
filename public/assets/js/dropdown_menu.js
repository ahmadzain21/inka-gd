var dropdown = document.querySelectorAll('.dropdown');

dropdown.forEach(a => {
    var button = a.querySelector('.drop');
    var content = a.querySelector('ul');

    button.addEventListener('click', () => {
        if(content.classList.contains('hidden')) {
            content.classList.remove('hidden', 'h-0'), content.classList.add('flex', 'h-auto')
        } else {
            content.classList.remove('flex', 'h-auto'), content.classList.add('hidden', 'h-0')
        }
    })
})