window.onload = function () {

	var admin = new Vue({
		el: '#admin',
		data: {
			values: {
				strip1_tab1Text: '',
				strip1_tab2Text: '',
				strip1_tab3Text: '',
				strip1_tab4Text: '',
				section1_headTitle: '',
				section2_rightBullet1: '',
				section2_rightBullet2: '',
				section2_rightBullet3: '',
				section2_rightBullet4: '',
				section2_rightBullet5: '',
				section2_rightBullet6: '',
				section2_rightBullet7: '',
				section2_leftText: '',
				strip3_title: '',
				section3_icon1Text: '',
				section3_icon1Desc: '',
				section3_icon2Text: '',
				section3_icon2Desc: '',
				section3_icon3Text: '',
				section3_icon3Desc: '',
				section3_icon4Text: '',
				section3_icon4Dec: '',
				section4_title: '',
				section4_content: '',
				section4_icon1Title: '',
				section4_icon1SubTitle: '',
				section4_icon2Title: '',
				section4_icon2SubTitle: '',
				section4_icon3Title: '',
				section4_icon3SubTitle: '',
				terms_content: ''
			}
		},
		mounted(){
			this.getVals();
		},
		methods: {
			send: function(event){
				var data_vals = this.values;				
				$.each(data_vals, function(index, el){
					if(el != ''){
						data_vals[index] = el;
					}
				});

				$.ajax({
					url: 'update',
					type: 'POST',
					data: data_vals,
				})
				.done(function() {
					// alert("בוצע");
				})
				
				event.preventDefault();
			},
			getVals: function(event){
				var globalThis = this;
				$.ajax({
					url: 'showJson',
					type: 'POST',
					data: {type: 'home'}
				})
				.done(function(data){
					var dataArray = JSON.parse(data);
					var result = {};
					Object.keys(dataArray).map(function(key, index) {
						Object.keys(dataArray[key]).map(function(key2, index2) {
							result[key + '_' + key2] = dataArray[key][key2];
						});
					});
					globalThis.values = result;
				})
			},
		}
	});
}