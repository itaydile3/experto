window.onload = function () {

	var winHeight = window.innerHeight;
	var isMobile = window.innerWidth < 769 ? true : false;
	var topHeight = $('.top').height();
	var imageInfo;

	var app = new Vue({
		el: '#app',
		data: {
			heights: {
				section1: '',
				section2: '',
				section3: '',
				section4: ''
			},
			texts: {
				strip1:{
					tab1Text: '' ,
					tab2Text: '',
					tab3Text: '',
					tab4Text: ''
				},
				strip2:{
					title: ''
				},
				strip3:{
					title: ''
				},
				section1: {
					headTitle: ''
				},
				section2: {
					title: '',
					content: ''
				},
				section3: {
					icon1Text: "",
					icon1Desc: "",
					icon2Text: "",
					icon2Desc: "",
					icon3Text: "",
					icon3Desc: "",
					icon4Text: "",
					icon4Desc: ""
				},
				section4: {
					title: "",
					content: "",
					icon1Title: "",
					icon1SubTitle: "",
					icon2Title: "",
					icon2SubTitle: "",
					icon3Title: "",
					icon3SubTitle: ""	
				},
				terms: {
					content: ""
				},
			},
			winHeight: winHeight,
			isActive: 1,
			dot: true,
			scrolled: false,
			sectionScrollVals: {
				section1: '',
				section2: '',
				section3: '',
				section4: '',
			},
			lastScrollTop: 0,
			resp: isMobile,
		},
		mounted() {
			axios.get("images_info").then(response => 
				this.calc(response.data)
				);

			const params = new URLSearchParams();
			params.append('type', 'home');
			axios.post('showJson', params).then(response => {this.texts = response.data});
			
			// this.sectionScrollVals.section1 = $('section#page1').position().top;
			// this.sectionScrollVals.section2 = $('section#page2').position().top;
			// this.sectionScrollVals.section3 = $('section#page3').position().top;
			// this.sectionScrollVals.section4 = $('section#page4').position().top;
			window.addEventListener('scroll', this.handleScroll);

			if (this.resp) {
				$('#page2 .right-content').insertBefore('#page2 .left-content');
				$('#page2 .sec2contain .right-content .right-text ul li').wrapInner("<span></span>");
			}

		},
		destroyed () {
			window.removeEventListener('scroll', this.handleScroll);
		},
		methods: {
			calc: function (resp){
				$.each(resp, function(index, prop){
					var w = prop[0];
					var h = prop[1];
					var fw = window.innerWidth;
					var nw = (h / w) * fw;
					// (original height / original width) x new width = new height
					
					switch (index) {
						case 'section1-back':
						app.heights.section1 = nw.toFixed(2);
						break;
						case 'section2-back':
						app.heights.section2 = nw.toFixed(2);
						break;
						case 'section3-back':
						app.heights.section3 = nw.toFixed(2);
						break;
						case 'section4-back':
						app.heights.section4 = nw.toFixed(2);
						break;

						default:
							// statements_def
							break;
						}
					});
			},
			getDetail:function(){
				axios.get("show_json").then(response => 
					this.globalJson = response.data
					);
			},
			handleScroll () {
				this.scrolled = window.scrollY;
				if (this.scrolled > this.sectionScrollVals.section1 && this.scrolled < this.sectionScrollVals.section2) {this.isActive = 1}
					if (this.scrolled > this.sectionScrollVals.section2 && this.scrolled < this.sectionScrollVals.section3) {this.isActive = 2}
						if (this.scrolled > this.sectionScrollVals.section3 && this.scrolled < this.sectionScrollVals.section4) {this.isActive = 3}
							if (this.scrolled > this.sectionScrollVals.section4) {this.isActive = 4}
						},
				},
			});


	VueScrollTo.setDefaults({
		container: "body",
		duration: 500,
		easing: "ease",
		offset: 0,
		cancelable: true,
		onStart: false,
		onDone: false,
		onCancel: false,
		x: false,
		y: true
	});
}