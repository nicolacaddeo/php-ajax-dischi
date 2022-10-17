console.log('JS Ok!');


const app = new Vue({
    el: '#root',
    data() {
        return {
            songs: []
        }
    },
    mounted() {
        axios.get('./data/songs.php')
            .then((result) => {
                // console.log('questo è result: ', result);
                songs = result.data;
                // console.log('questo è songs: ', songs);
            })
            .catch((error) => console.log(error));
    }
})