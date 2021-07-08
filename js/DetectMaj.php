<script>
    const capsMessage = document.querySelector('.message');
    const input = document.querySelector('input');

    window.addEventListener('keyup', event => {
        if (event.getModifierState('CapsLock')) {
            capsMessage.style.display = 'block';
            capsMessage.style.float = 'none';

        } else {
            capsMessage.style.display = 'none';


        }
    });
</script>