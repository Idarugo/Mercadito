<script>
    const redirectTo = (path) => {
        if(location.hostname.includes('localhost')){
            if (navigator.userAgent.toLowerCase().indexOf('safari') != -1) { 
                if (navigator.userAgent.toLowerCase().indexOf('chrome') <= -1) {
                    location.assign(`http://localhost:8080/Mercadito/${path}`);
                } 
                location.assign(`http://localhost/Mercadito/${path}`);
            }
        }else{
            location.assign(`${location.hostname}/${path}`);
        } 
    }
</script>