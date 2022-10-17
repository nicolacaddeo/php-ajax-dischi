console.log('JS Ok!');


const app = new Vue({
    el: '#root',
    data: {
        songs: []
    },
    mounted() {
        axios.get('./data/songs.php')
            .then((result) => {
                this.songs = result.data;
                console.log('songs: ', this.songs);
            })
            .catch((error) => console.log('error:', error));
    }
})


