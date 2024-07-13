import Alpine from "alpinejs";
window.Alpine = Alpine

Alpine.data('post' , ()=>{
    return {
       fetchData() {
            // let apiResponse = await fetch("https://jsonplaceholder.typicode.com/posts");
            // let data = await apiResponse.json();
            // return data;
            console.log('dfsd')

        }
    }



})
Alpine.start()
