window.onload = function () {

	var app = new Vue({
		el: '#terms',
		data: {
			terms_content: '',
			height: window.innerHeight,
		},
		mounted() {
			axios.get("showJson")
			.then(response => {this.terms_content = response.data.terms.content});
		},
	});

}