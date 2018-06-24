	<body>
		<div class="container" id="app">
			<div class="top">
				<img v-bind:src="[!resp ? './images/experto_logo.png' : './images/mobile/experto_logo.png']" alt="logo" /> 
			</div>
			<section id="page1" v-bind:style="{height: heights.section1}">
				<div class="sub-container">
					<div class="sec1-left-side"><img src="./images/experto_logo-sec1.png" alt=""></div>
					<div class="sec1-right-side">
						<p>
							{{texts.section1.headTitle}}
						</p>
					</div>
				</div>
				<a class="arrow1" href="#" v-scroll-to="'#page2'">
					<img src="./images/down-arrow.png" alt="" class="">
				</a>
			</section>
			<div id="strip1">
				<div class="strip-cont">
					<div class="tab_text"><span>{{texts.strip1.tab1Text}}</span></div>
					<div class="tab_text"><span>{{texts.strip1.tab2Text}}</span></div>
					<div class="tab_text"><span>{{texts.strip1.tab3Text}}</span></div>
					<div class="tab_text"><span>{{texts.strip1.tab4Text}}</span></div>
				</div>
			</div>
			<section id="page2" v-bind:style="{height: heights.section2}">
				<div class="sec2contain">
					<div class="title-contain">
						<h2 class="sec2-title">{{texts.section2.title}}</h2>
					</div>
					<div class="content-contain">
						<div class="sec2-content" v-html="texts.section2.content"></div>
					</div>
				</div>
			</section>
			<div id="strip2">
				<h1 class="section3_title">{{texts.strip2.title}}</h1>
			</div>
			<section id="page3" v-bind:style="[!resp ? {height: heights.section3} : null]">
				<h1>{{texts.section3.title}}</h1>
				<div class="icons-container">
					<div class="box box1">
						<div class="icon_cont">
							<img src="./images/sec3-icon1.png" alt="" class="iconImg">
							<span class="txt-icon">{{texts.section3.icon1Text}}</span>
							<div class="addon-txt"> בשיתוף</div>
							<img src="./images/leumi-logo_small.png" alt="">
						</div>
						<div class="icon_mainDesc" v-html="texts.section3.icon1Desc"></div>
					</div>
					<div class="box box2">
						<div class="icon_cont">
							<img src="./images/sec3-icon2.png" alt="" class="iconImg">
							<span class="txt-icon">{{texts.section3.icon2Text}}</span>
						</div>
						<div class="icon_mainDesc" v-html="texts.section3.icon2Desc">icon2Text</div>
					</div>
					<div class="box box3">
						<div class="icon_cont">
							<img src="./images/sec3-icon3.png" alt="" class="iconImg">
							<span class="txt-icon">{{texts.section3.icon3Text}}</span>
						</div>
						<div class="icon_mainDesc" v-html="texts.section3.icon3Desc"></div>
					</div>
					<div class="box box4">
						<div class="icon_cont">
							<img src="./images/sec3-icon4.png" alt="" class="iconImg">
							<span class="txt-icon">{{texts.section3.icon4Text}}</span>
						</div>
						<div class="icon_mainDesc" v-html="texts.section3.icon4Desc"></div>
					</div>
				</div>
			</section>
			<div id="strip3">
				<div class="sec4title">{{texts.strip3.title}}</div>
			</div>
			<section id="page4" v-bind:style="{height: heights.section4}">
				<div class="sec4-cont">
					<div class="sec4content" v-html="texts.section4.content"></div>
					<div class="sec4-icon_container">
						<div class="icon-box">
							<img src="./images/sec4-icon1.png" alt="">
							<div class="iconTitle">{{texts.section4.icon1Title}}</div>
							<div class="iconSubTitle">{{texts.section4.icon1SubTitle}}</div>
						</div>
						<div class="icon-box">
							<img src="./images/sec4-icon2.png" alt="">
							<div class="iconTitle">{{texts.section4.icon2Title}}</div>
							<div class="iconSubTitle">{{texts.section4.icon2SubTitle}}</div>
						</div>
						<div class="icon-box">
							<img src="./images/sec4-icon3.png" alt="">
							<div class="iconTitle">{{texts.section4.icon3Title}}</div>
							<div class="iconSubTitle">{{texts.section4.icon3SubTitle}}</div>
						</div>
					</div>
				</div>
			</section>
			<section id="page5">
				<div class="sec5-top">
					<div class="sec5img_container">
						<img src="./images/leumi-logo.jpg" alt="">
					</div>
					<div class="sec5-topDesc">
						<p>חברת לאומי קארד מבית בנק לאומי, המחזיק ב-80% ממניות החברה, מובילה את שוק חברות האשראי והסליקה בישראל עם 2 מיליון כרטיסים אשראי ושירותי סליקה בלמעלה מ-40 אלף בתי עסק. באמצעות חדשנות, מגוון רחב של מוצרים פיננסים, הון אנושי מובחר, קוד אתי איתן ושימת דגש רב על מתן שירות,  מצליחה לאומי קארד לרשום את הצמיחה הגבוהה ביותר מבין חברות האשראי בישראל כשהיא מציבה את הלקוח וצרכיו במרכז </p>
					</div>
				</div>
				<div class="form_container">
					<h3 class="form_title">צור קשר</h3>
					<form action="#">
						<input type="text" placeholder="שם" name="full_name">
						<input type="text" placeholder="טלפון" name="phone">
						<br>
						<input type="text" placeholder="כתובת דואר אלקטרוני" name="email">
						<br>
						<textarea name="msg-content" id="msg-content" cols="30" rows="10"></textarea>
						<div class="btn_cont"><div id="send-form"></div></div>
					</form>
					<a class="arrow2" href="#" v-scroll-to="'#page1'">
						<img src="./images/up-arrow.png" alt="" class="">
					</a>
				</div>
			</section>
		</div>
	</body>
	</html>