<script>
    const checkbox = document.getElementById('aceiteTermos');
    const btnConectar = document.getElementById('btn-conectar');

    checkbox.addEventListener('change', function() {
        if (this.checked) {
            btnConectar.disabled = false;
        } else {
            btnConectar.disabled = true;
        }
    });
</script>
