<body class="admin">
	<div id="admin"> 
		<form>
			<div class="update_section" id="section1">
				<h1>עריכת דף ראשון</h1>
				<label for="sec1_headTitle">כותרת משנה</label>
				<input v-model="values.section1_headTitle" type="text" class="section1" />
				<br>
			</div>
			<div class="update_section" id="strip_tabs">
				<h1>עריכת טאבים</h1>
				<label for="tab1Text">כותרת</label>
				<input v-model="values.strip1_tab1Text" type="text" />
				<br>
				<label for="tab2Text">כותרת</label>
				<input v-model="values.strip1_tab2Text" type="text" />
				<br>
				<label for="tab3Text">כותרת</label>
				<input v-model="values.strip1_tab3Text" type="text" />
				<br>
				<label for="tab4Text">כותרת</label>
				<input v-model="values.strip1_tab4Text" type="text" />
				<br>
			</div>
			<div class="update_section" id="section2">
				<h1>עריכת דף שני</h1>
				<label for="section2_title">כותרת</label>
				<input v-model="values.section2_title" type="text" />
				<br>
				<div class="cke_container">
					<label for="section2_content">תוכן</label>
					<ckeditor v-model="values.section2_content" id="section2_content" :value="values.section2_content"></ckeditor>
				</div>
			</div>
			<div class="update_section" id="section3">
				<h1>עריכת דף  שלישי</h1>
				<label for="strip2_title">כותרת</label>
				<input v-model="values.strip2_title" type="text" name="strip2_title">
				<br>
				<label for="icon1Text">טקסט סמל  1</label>
				<input v-model="values.section3_icon1Text" type="text" name="section3_icon1Text">
				<br>
				<div class="cke_container">
					<label for="icon1Desc">סמל 1 תיאור</label>
					<ckeditor v-model="values.section3_icon1Desc" id="section3_icon1Desc"></ckeditor>
				</div>
				<br>
				<label for="icon2Text">טקסט סמל  2</label>
				<input v-model="values.section3_icon2Text" type="text" name="section3_icon2Text">
				<div class="cke_container">
					<label for="icon2Desc">סמל 2 תיאור</label>
					<ckeditor v-model="values.section3_icon2Desc" id="section3_icon2Desc"></ckeditor>					
				</div>
				<br>
				<label for="icon3Text">טקסט סמל  3</label>
				<input v-model="values.section3_icon3Text" type="text" name="section3_icon3Text">
				<div class="cke_container">
					<label for="icon3Desc">סמל 3 תיאור</label>
					<ckeditor v-model="values.section3_icon3Desc" id="section3_icon3Desc"></ckeditor>					
				</div>
				<br>
				<label for="icon4Text">טקסט סמל  4</label>
				<input v-model="values.section3_icon4Text" type="text" name="section3_icon4Text">
				<div class="cke_container">
					<label for="icon4Desc">סמל 4 תיאור</label>
					<ckeditor v-model="values.section3_icon4Desc" id="section3_icon4Desc"></ckeditor>					
				</div>
			</div>
			<div class="update_section" id="section4">
				<h1>עריכת דף רביעי</h1>
				<label for="strip3_title">כותרת</label>
				<input v-model="values.strip3_title" type="text" name="strip3_title" />
				<br>
				<div class="cke_container">
					<label for="content">עריכת תוכן</label>
					<ckeditor v-model="values.section4_content" id="section4_content"></ckeditor>
				</div>
			</div>
			<h3>עריכת סמלים</h3>
			<label for="icon1Text">כותרת סמל 1</label>
			<input v-model="values.section4_icon1Title" type="text" />
			<br>
			<label for="icon1Desc">תת-כותרת סמל 1</label>
			<input v-model="values.section4_icon1SubTitle" type="text" />
			<br>
			<label for="icon2Text">כותרת סמל 2</label>
			<input v-model="values.section4_icon2Title" type="text" />
			<br>
			<label for="icon2Desc">תת כותרת סמל 2</label>
			<input v-model="values.section4_icon2SubTitle" type="text" />
			<br>
			<label for="icon3Text">כותרת סמל 3</label>
			<input v-model="values.section4_icon3Title" type="text" />			
			<br>
			<label for="icon3Desc">תת כותרת סמל 3</label>
			<input v-model="values.section4_icon3SubTitle" type="text" />
			<br>
			<label for="terms_content">תקנון ותנאי שימוש</label>
			<ckeditor v-model="values.terms_content" id="terms_content" :value="values.terms_content"></ckeditor>
			<br>
			<button type="button" v-on:click="send" >send</button>
		</form>
	</div>
</body>
</html>