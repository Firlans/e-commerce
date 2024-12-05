import Alpine from 'alpinejs'

export function dropdown() {
    return {
        isOpen: false,
        toggle() {
            this.isOpen = !this.isOpen
        },
        close() {
            this.isOpen = false
        }
    }
}

window.Alpine = Alpine
Alpine.data('dropdown', dropdown)
Alpine.start()