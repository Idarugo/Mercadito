<script>
    const redirectTo = (path) => {
        if(location.hostname.includes('localhost')){
            location.assign(`http://localhost/Mercadito/${path}`);
        }else{
            location.assign(`${location.hostname}/${path}`);
        } 
    }
</script>