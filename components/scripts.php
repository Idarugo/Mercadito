<script>
    const redirectTo = (path) => {
        if(location.hostname.includes('localhost')){
            if (safari != undefined) { 
                console.log('HOLA');
                location.assign(`http://localhost:8080/Mercadito/${path}`);
            }
                location.assign(`http://localhost/Mercadito/${path}`);
        }else{
            location.assign(`${location.hostname}/${path}`);
        } 
    }
</script>