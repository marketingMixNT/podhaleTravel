document.addEventListener('livewire:navigated', () => { 
    const currentYearSpan = document.querySelector('#footerYear')

const currentYear = new Date().getFullYear()

currentYearSpan.innerHTML = currentYear
})