<div id="vue-search-nav" >
<div v-click-outside="closeSuggestion">
    <component-search-suggestion
    ref="suggestion"
    :label="{
	    placeholder:'<?php echo CJavaScript::quote(t("Search by bakery name"))?>', 	    
	}"
    >
    </component-search-suggestion>	   
</div> <!--v-click-outside-->    
</div><!-- closeSuggestion-->