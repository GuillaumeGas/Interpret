@charset "UTF-8";
/* CSS Document */
/* TOOLS MENU */
/* convert to stylevars pls */

.toolsmenu {
	background: #ffffff none   ;
	width: 100%;
	display: block;
	border: 1px solid #e4e4e4;
	float: left;
	clear: both;
	margin: 12px 0 !important;
}

.toolsmenu div {
	text-align: right;
	color: #4e4e4e;
	width: 100%;
	clear: both;
	float: left;
}

.toolsmenu h1 {
	font-size:24px;
	font-weight:normal;
	text-align: left;
	display: inline;
	float: left;
	margin: 12px;
	letter-spacing: -1px;
}

.toolsmenu h1 a {
	color: #4e4e4e;
}

.toolsmenu ul {
	padding: 6px 0;
	float: right;
;
}
.toolsmenu#albumtop ul {

	margin: 12px;
}

.toolsmenu .nopopupgroup li {
	float: left;
	margin-left: 12px;
}

.toolsmenu .popupgroup a.popupctrl, .toolsmenu .popupgroup .popupmenu a.popupctrl, .toolsmenu .nopopupgroup li a {
	font-size: 11px;
	color: #4e4e4e;
	display:block;
	_display:inline;
	float: left;
	clear: right;
	padding: 0.2em 0.4em;
}

.toolsmenu .popupgroup a.popupctrl, .toolsmenu .popupgroup .popupmenu a.popupctrl, .toolsmenu .popupgroup .popupmenu:hover a.popupctrl, .toolsmenu .popupgroup .popupmenu:hover .popupctrl a.popupctrl.active {
	border: 0;
	color: #4e4e4e;
	padding-right: 15px;
}

.toolsmenu li {
	position: relative;
	display:block;
	clear: right;
}

.toolsmenu .popupgroup ul {
	text-align: left;
	float: left;
}

.toolsmenu .popupgroup .popupbody {
	padding:3px;
}

.toolsmenu .menuimage, .toolsmenu li a.menuimage {
	padding-left: 20px;
	color: #4e4e4e;
}

.toolsmenu .nopopupgroup li a, .toolsmenu .menuimage a.popupctrl {
	color: #4e4e4e;
        font-weight: bold;
}

.toolsmenu .nopopupgroup li a:hover, .toolsmenu .menuimage a.popupctrl:hover {
	color: #43A6DF;
}

.menusearch.popupmenu .popupbody {
	min-width:240px;
	max-width:240px;
	font-size: 11px;
	left: -100px;
}

.menusearch input.button {
	float: right;
	top: 0;
}

.menusearch .submitoptions {
	width: 50%;
	float: left;
	text-align: left;
	clear: right;
}

.menusearch .formsubmit .advancedsearchlink {
	width: 50%;
	float: left;
	clear: right;
}

.toolsmenu .popupgroup .popupbody a, .toolsmenu .popupgroup .popupbody li label {
	font-size: 13px;
}

.toolsmenu .popupgroup .popupbody li {
	width: 100%;
}

.toolsmenu .popupgroup .popupbody form ul  {
	width: 100%;
}


/* CSS Document */

.postlist, #postlist {
	clear:both;
	margin-top:6px;
	margin-bottom:12px;
	position:relative;
	_height: 1%;
	_zoom: 1;
}


.above_postlist, #above_postlist {
	width:100%;
	position:relative;
	left:0;
	float: left;
	height: 36px;
	margin-top: 6px;
	/*height: 25px;*/
	_height: 1%;
	_zoom: 1;
}

.posts, #message_list {
	margin:12px 0;
}

#inlinemod_formctrls ul {
	left:auto;
	right:0;
}

.postlist_navpopup {
	clear:both;
	margin-top:2em;
}

.qr_require_click {
	display: none;
}

form#quick_reply {
	max-width:100%;
}

form#quick_reply .actionbuttons .group {
	max-width:100%;
}

form#quick_reply textarea {
	height:100px;
}

.above_postlist .newcontent_textcontrol {
	margin-top: 6px;
	position: relative;
	_display:inline;
}

#pagination_postlist_bottom {
	float:left;
}

.pagination_top {
	width: 60%;
	float: right;
	position: relative;
	margin-top: 6px;
	right: 0;
}

.above_postlist .pagination_top .pagination, .above_postlist .pagination_top .postpagestats {
	float: right;
	clear:left;
	vertical-align:middle;
	font-size: 12px;
	color: #3e3e3e;
	_display:inline;
}

.postpagestats {
	margin-top: -1px; 
	vertical-align:inherit;
}
	
.pagination_top .pagination {
	margin-left: 12px;
	position: relative;
	top: -3px;
}

.postlistfoot {
	display:block;
	width: 100%;
        height: 2em;
        clear:both;
        position: relative;
}

.below_postlist {
	display:block;
	clear:both;
	position: relative;
	float: right;
	margin-top: 45px;
	margin-bottom: 1em;
	width: 100%;
}
.noinlinemod.below_postlist {
	margin-top: -2.5em;
}
.discussionlist + .below_postlist {
	margin-bottom: 24px;
}

.below_postlist .pagination_bottom {
	float: right;
	margin-top: 5px;
	width: 100%;
}

.below_postlist .pagination_bottom .pagination {
	float: right;
	clear: left;
	margin-left: 6px;
	position: relative;
        margin-bottom: 1em;
}

.below_postlist .newcontent_textcontrol {
	position: absolute;
	top: -2.5em;
}
.noinlinemod.below_postlist .newcontent_textcontrol {
	top: 0em;
}



/* CSS Document */

.pagetitle {
	width: 100%;
}

.postlist {
 /* ie6-only hack */
  _border:1px solid transparent;
}

.popupbody .rating {
	display:block;
	padding:0px;
	padding-left:75px;
	background:transparent url(images/rating/rating-15_0.png) left center no-repeat;
}

.popupbody .r5 { background-image:url(images/rating/rating-15_5.png); }
.popupbody .r4_right { background-image:url(images/rating/rating-15_4.png); }
.popupbody .r3_right { background-image:url(images/rating/rating-15_3.png); }
.popupbody .r2_right { background-image:url(images/rating/rating-15_2.png); }
.popupbody .r1_right { background-image:url(images/rating/rating-15_1.png); }

/*RTL rating*/
.popupbody .r4_left { background-image:url(images/rating/rating-15_4_left.png); }
.popupbody .r3_left { background-image:url(images/rating/rating-15_3_left.png); }
.popupbody .r2_left { background-image:url(images/rating/rating-15_2_left.png); }
.popupbody .r1_left { background-image:url(images/rating/rating-15_1_left.png); }
.searchthread.popupmenu .popupbody {
	width:236px;
}

.searchthread.popupmenu .popupbody input.searchbox{
	margin-top:1px;
	margin-bottom:3px;
}

.searchthread.popupmenu .popupbody input.button{
	float:right;
	top:0;
}

.qrcontainer.blockfoot {
	padding-top: 0;
	-moz-border-radius-topright: ;
	-moz-border-radius-topleft: ;
	-webkit-border-top-right-radius: ;
	-webkit-border-top-left-radius: ;
	border-top-right-radius: ;
	border-top-left-radius: ;
}

.formcontrols .openclose, .formcontrols .stickunstick, .formcontrols .showsignature {
	padding:5px;
}

/* ADS First and Last Post */
#ad_thread_first_post_content {
     float:right;
}
#ad_thread_last_post_content {
     float:right;
}


/* Threaded Mode */
#posttree {
	height:150px;
	overflow:auto;
	padding:2px;
	text-align:left;
	border: 1px solid #6b91ab;
	border-top:0;
	white-space:nowrap;
}

#posttree .poston {
	background: #FFFFFF none   ;
}

#posttreee .postoff {

}

#threaded_view h4 {
	background: #43A6DF none   ;
	border: 1px solid #43A6DF;
	color: #ffffff;
	font:   normal 14px ;
	padding: 4px;
}

a.firstunread {
	background: url(images/metro/blue/buttons/firstnew.png) right center no-repeat;
	padding: 0 4px;
	padding-right: 15px;
	font-size:11px;
	border:1px solid transparent;
	margin-left:5px;
	text-decoration:none;
	display: inline-block;
}

#tag_edit_form .formcontrols {
	border-top: 1px solid #e4e4e4;
}


/* CSS Document */

/* last edited notice */
.lastedited {
	font-style:italic;
	padding-top: 1em;
	color: #3e3e3e;
	font-size: 11px;
/*	clear:both; */
}

.lastedited a {
	color: #3e3e3e;
}
/* reputation image */
.postbit_reputation {
	clear: both;
	display: block;
	font-size: 0;
	padding-left: 2px;
}

img.repimg {
    display: inline;
    margin-left: -1px;
}

.quickedit {
border-top: 1px solid #e4e4e4;
}
/*signature */
.signature {
        padding-top: 1em;
	border-top: 1px solid #dddddd;
        margin-top: 2em;
}


/*post bit*/
.postbit, .postbitlegacy, .eventbit {
	margin-bottom: 12px;
	display:block;
	width: 100%;
	clear:both;
	position: relative;
	float: left;
	color: #3e3e3e;
	border: 1px solid #e4e4e4;
}

.postbit object {
	clear:both; 
}

.postbit .postdetails {
	width: 100%;
	display:block;
	float: left;
}

.postrow {
	overflow: auto;
}

.postbit .posthead, .postbitlegacy .posthead, .eventbit .eventhead {
	background: #43A6DF none   ;
	_background-image: none;
	border: 1px solid #43A6DF;
	clear:both;
	display:block;
	float: left;
	width: 100%;
	color: #ffffff;
	margin: -1px -1px 0;
	font:   normal 14px ;
	padding: 9px 0;
}

.postbit .posthead .postdate, .postbitlegacy .posthead .postdate {
            display:block;
            float:left;
            clear:right;
            width: 49%;
            margin-left: 10px;
            font:   normal 14px ;
            padding-left: 15px;
}

.postbit .posthead .postdate.old, .postbitlegacy .posthead .postdate.old {
            background:transparent url(images/metro/blue/statusicon/post_old.png) no-repeat center left;
}

.postbit .posthead .postdate.new, .postbitlegacy .posthead .postdate.new {
            background:transparent url(images/metro/blue/statusicon/post_new.png) no-repeat center left;
}

.postbit .postdate .time {
	color: #ffffff;
	margin-left: 12px;
}

.postbithead .postdate .time {
	color: #3e3e3e;
}

.postbit .userinfo .contact, .postbit .userinfo_noavatar .contact {
	position: relative;
	float: left;
	clear: right;
	width: 50%;
	display:block;
}
.postbit .postuseravatarlink {
	display:block; 
	text-align: center;
	position: relative;
	top: 0;
	margin-left: 17px;
	float: left;
	clear: right;
}

.postbit .postuseravatarlink img {
}


.postbit .nodecontrols .postimod{
	top: 0;
	position:relative;
	margin-left: 12px;
}

.postbit .userinfo, .postbit .userinfo_noavatar {
	background: #f2f2f2 none   ;
	_background-image: none;
	clear:both;
	height: auto !important;
	border-bottom:1px solid #e4e4e4;
	padding: 0.5em 0;
	width: 100%;
	float: left;
}

.postbit .userinfo .contact, .userinfo .userinfo_extra, .postbit .userinfo_noavatar .contact {
	display:inline-block;
	height: auto !important;
}
.postbit .username_container {
 	float: left;
 	clear: right;
 	display:block;
 	margin-left: 12px;
}
.postbit .userinfo .username_container .memberaction, .postbit .userinfo_noavatar .username_container .memberaction {
 	display: inline;
}

.postbit .postdetails_noavatar .posthead, .postbit .postdetails_noavatar .userinfo .contact {
	margin-left: 0;
}

.postbit .userinfo .username, .postbit .userinfo_noavatar .username {
	font-size: 13px;
	font-weight: bold;
}

.postbit .userinfo_noavatar .imlinks img {
	display:inline;
}
.postbit .userinfo .username.guest, .postbit .userinfo_noavatar .username.guest {
	font-weight:normal;
}

.postbit .userinfo_noavatar .usertitle, .postbit .userinfo .usertitle, .postbit .userinfo_noavatar .rank, .postbit .userinfo .rank {
	font-size: 11px;
	font-weight: bold;
	display:block;
	clear:both;
}
.postbit .userinfo .userinfo_extra, .postbit .userinfo_noavatar .userinfo_extra {
	text-align: right;
	width: 300px;
	float: right;
	font-size: 11px;
}

.postbit .userinfo .userinfo_extra dl, .postbit .userinfo_noavatar .userinfo_extra dl {
	margin-right: 12px;
	float: right;
	width: 150px;
}

.postbit .userinfo_extra dl dt {
	float:left;
	display:block;
	margin-right: 6px;
}

.postbit .userinfo_extra dl dt:after  {
	content:":";
}
.postbit .userinfo_extra dl dt.blank:after {
	content:none;
}
.postbit .userinfo_extra dl dd {
	display:block;
}

.postbit .userinfo .moreinfo, .postbit .userinfo_noavatar .moreinfo {
	float: left;
	display: inline;
}

.postbit .userinfo .popupmenu a.popupctrl, .postbit .userinfo_noavatar .popupmenu a.popupctrl {
	font-size: 12px;
	background: transparent;
	padding: 0;
	display:inline-block;
}

.postbit .userinfo .popupmenu a.popupctrl:hover, .postbit .userinfo_noavatar .popupmenu a.popupctrl:hover {
	color: #43A6DF;
	text-decoration: ;
}

.postbit .postbody {
	clear: both;
	color: rgb(51, 51, 51);
	background: #ffffff none   ;
}

.postrow blockquote ul, .postrow blockquote ol, .postrow blockquote dl {
	margin:0 40px;
}

.postbit .postrow {
	font-family: ;
}
.postbit .postrow {
	padding: 6px 12px 3em;
	font:    13px ;
}
.postbit hr {
	display:none;
}

.postcontent {
	word-wrap: break-word;
}


.postbit .posttitle {
	display:block;
	padding: 12px;
	font-weight:bold;
	font:   bold 14px 'Open Sans', sans-serif;
	margin: 0;
}

/*postbit legacy*/

.postbitlegacy hr, .eventbit hr {
	display: none;
}

blockquote.restore hr {
	display: block;
}

.postbitlegacy .postdetails, .eventbit .eventdetails {
	float: left;
	width: 100%;
	background: #f2f2f2 none   ;
	_background-image: none;
}

.postbitlegacy .posthead .time {
	font:   normal 14px ;
	color: #ffffff;
}

.postbit .posthead .nodecontrols, .postbitlegacy .posthead .nodecontrols, .eventbit .eventhead .nodecontrols {
	position: absolute;
	color: #ffffff;
	right: 0;
	top: 0;
	width: 50% ;
	padding: 10px 12px 0;
	text-align: right;
	font:   normal 14px ;
	vertical-align: middle;
}

.postbit .posthead .nodecontrols a, .postbitlegacy .posthead .nodecontrols a, .eventbit .eventhead .nodecontrols a {
	color: #ffffff;
        top: -2px;
        position:relative;
}

.postbitlegacy .posthead .nodecontrols img, .eventbit .eventhead .nodecontrols img {
	position: relative;
	top: 2px;
	padding: 0;
}

.postbitlegacy .posthead .nodecontrols .postimod, .eventbit .eventhead .nodecontrols .postimod {
	top: 0px;
	position:relative;
	margin-left: 5px;
}

.postbitlegacy .postbody, .eventbit .eventdetails .eventbody {
	margin-left: 200px;
	border-left: 1px solid #efefef;
	background: #ffffff none   ;
	_background-image: none;
	padding-bottom: 1em;
}

.postbitlegacy .postrow, .eventbit .eventrow, .postbitdeleted .postrow, .postbitignored .postrow {
	padding: 6px 12px 12px;
	font:    13px ;
	color: rgb(51, 51, 51);
}

.postbitlegacy .userinfo {
	float:left;
	position: relative;
	width:176px; 
	padding: 2px 12px 6px;
	font-size: 11px;
	display:block;
        background: #f2f2f2 none   ;
	clear:both;
}

.postbitlegacy .userinfo .rank, .postbitlegacy .userinfo .usertitle {
	font-size: 11px;
	display:block;
	clear:both;
}

.postbitlegacy .userinfo .username_container {
	margin: 6px 0;
}


.postbitlegacy .userinfo .username_container .memberaction {
	display: inline;
}

.postbitlegacy .userinfo .postuseravatar, .eventbit .userinfo .eventuseravatar {
	display:block;
	margin:4px auto 0;
	text-align:left;
	width: auto;
	float: left;
	clear: both;
}

.postbitlegacy .userinfo .postuseravatar img, .eventbit .userinfo .eventuseravatar img {
 	max-width: 176px;
}

.postbitlegacy .userinfo a.username, .eventbit .userinfo a.username {
	clear:right;
	font-size: 20px;
	/*font-weight:bold;*/
	width: auto;
	max-width:156px;
	word-wrap:break-word;
}

.postbitlegacy .userinfo .guest.username, .eventbit .userinfo .guest.username {
	padding-top: 6px;
	display:block;
	font-size: 13px;
}

.postbitlegacy dl.userinfo_extra, .postbitlegacy dl.user_rep {
	margin: 6px 0;
	display:block;
	float: left;
	width: 176px; 
}
.postbitlegacy dl.userinfo_extra dt, .postbitlegacy dl.user_rep dt {
	float: left;
	text-align: left;
	/*color: #777777;*/
	margin-right: 12px;
	margin-left: 0;
	min-width:60px;
	width:auto !important;
	width:60px;
}

.postbitlegacy dl.userinfo_extra dt:after, .postbitlegacy dl.user_rep dt:after {
	content: ":";
}

.postbitlegacy dl.user_rep dt.blank:after {
	content: none;
}

.postbitlegacy dl.userinfo_extra dd, .postbitlegacy dl.userinfo_extra dd a, .postbitlegacy dl.user_rep dd {
	padding-bottom: 3px;
}

.postbitlegacy dl.user_rep img {
	margin-top: 12px;
}

.postbitlegacy .imlinks {
	width: 100%;
	float: left;
}

.postbitlegacy .imlinks img {
	display:inline;
}

.postbitlegacy .title, .eventbit .title {
	display:block;
	padding: 12px;
        padding-left: 0;
	font:   bold 14px 'Open Sans', sans-serif;
}

.postbit .postfoot, .postbitlegacy .postfoot, .eventbit .eventfoot {
	display:block;
	position: relative;
	right: 0;
	float: left;
	clear:both;
	/*vertical-align: bottom;*/
	background: transparent;
	/*height: 26px;*/
	font:   bold 11px 'Open Sans', sans-serif;
	width: 100%;
}

.postbitlegacy .postrow.has_after_content {
	padding-bottom: 4em;
}

.postbitlegacy .after_content {
	position: relative;
	width: 100%;
	clear:both;
}

.postbitlegacy .signature, .postbitlegacy .lastedited {
	margin-top: 1em;
	padding: 1em 12px 0;
}

.postbit .postfoot .textcontrols, .postbitlegacy .postfoot .textcontrols, .eventbit .eventfoot .eventcontrols {
	padding: 7px 0 8px;
	display:block;
	background: #f2f2f2 none   ;
	_background-image: none;
	font:   bold 11px 'Open Sans', sans-serif;
	width: 100%;
	margin-right: 10px;
	border-top: solid 1px #e4e4e4;
}
.postbitlegacy .postfoot  .postcontrols, .postbit .postfoot  .postcontrols {
	float:right;
	padding-right:12px;
	text-align:right;
	width:50%;
}

.postbitlegacy .postfoot .postlinking, .postbit .postfoot .postlinking {
	padding-left:12px;
}

.postbitlegacy .postfoot .textcontrols img.inline, .postbit .postfoot .textcontrols img.inline {
	position: absolute;
	top: 2px;
	left: -1px;
	margin-right: 1px;
}
.postbitlegacy .postfoot .textcontrols span.seperator, .postbit .postfoot .textcontrols span.seperator {
	border-right: 1px solid #DADADA;
	display: inline;
	margin: 0 5px;
}
.postbitlegacy .postfoot .textcontrols a, .postbit .postfoot .textcontrols a, .eventbit .eventfoot .eventcontrols a,
.postbitlegacy .postfoot .textcontrols span.mobile, .postbit .postfoot .textcontrols span.mobile {
	-moz-border-radius: 0px;
	-webkit-border-radius: 0px;
	border-radius: 0px;
	padding: 0;
	padding-left: 23px;
	border: 0px solid #e4e4e4;
	background: ;
	_background-image: none;
	color: #4e4e4e;
	font:   bold 11px 'Open Sans', sans-serif;
	display:inline-block;
	/* margin needs to be left invariant of the text direction (LTR-RTL) */
	margin-left: 5px;
}

/* Text button hover images */
.postbitlegacy .postfoot .textcontrols img.spam, .postbit .postfoot .textcontrols img.spam  {
	padding-top: 2px;
}
.postbitlegacy .postfoot .textcontrols img.moderated, .postbit .postfoot .textcontrols img.moderated, .postbitlegacy .postfoot .textcontrols img.spam, .postbit .postfoot .textcontrols img.spam, .postbitlegacy .postfoot .textcontrols img.deleted_nolink, .postbit .postfoot .textcontrols img.deleted_nolink  {
	padding-top: 2px;
}
.postbitlegacy .postfoot .textcontrols a.editpost, .postbit .postfoot .textcontrols a.editpost, .eventbit .eventfoot .textcontrols a.editevent  {
	background: url(images/metro/blue/buttons/edit_40b.png) no-repeat  left ;
        padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px solid #e4e4e4;
}
.postbitlegacy .postfoot .textcontrols a.editpost:hover, .postbit .postfoot .textcontrols a.editpost:hover, .eventbit .eventfoot .textcontrols a.editevent:hover  {
	background: url(images/metro/blue/buttons/edit_40b-hover.png) no-repeat  left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px solid #e4e4e4;
}
.postbitlegacy .postfoot .textcontrols a.quickreply, .postbit .postfoot .textcontrols a.quickreply, .postbitlegacy .postfoot .textcontrols a.forwardpost, .postbit .postfoot .textcontrols a.forwardpost  {
	background: url(images/metro/blue/buttons/reply_40b.png) no-repeat  left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px solid #e4e4e4;
}
.postbitlegacy .postfoot .textcontrols a.quickreply:hover, .postbit .postfoot .textcontrols a.quickreply:hover, .postbitlegacy .postfoot .textcontrols a.forwardpost:hover, .postbit .postfoot .textcontrols a.forwardpost:hover  {
	background: url(images/metro/blue/buttons/reply_40b-hover.png) no-repeat  left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px solid #e4e4e4;
}
.postbitlegacy .postfoot .textcontrols a.newreply, .postbit .postfoot .textcontrols a.newreply  {
	background: url(images/metro/blue/buttons/quote_40b.png) no-repeat  left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px solid #e4e4e4;
}
.postbitlegacy .postfoot .textcontrols a.newreply:hover, .postbit .postfoot .textcontrols a.newreply:hover  {
	background: url(images/metro/blue/buttons/quote_40b-hover.png) no-repeat  left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px solid #e4e4e4;
}
.postbitlegacy .postfoot .textcontrols a.multiquote, .postbit .postfoot .textcontrols a.multiquote  {
	background: url(images/metro/blue/buttons/multiquote-back_40b.png) no-repeat  left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	padding-bottom:1px;
	border: 0px solid #e4e4e4;
}
.postbitlegacy .postfoot .textcontrols a.multiquote:hover, .postbit .postfoot .textcontrols a.multiquote:hover  {
	background: url(images/metro/blue/buttons/multiquote_40b-hover.png) no-repeat  left;	
}
.postbitlegacy .postfoot .textcontrols a.promotecms, .postbit .postfoot .textcontrols a.promotecms  {
	background: url(images/metro/blue/cms/promote_small.png) no-repeat  left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px solid #e4e4e4;
}
.postbitlegacy .postfoot .textcontrols a.promotecms:hover, .postbit .postfoot .textcontrols a.promotecms:hover  {
	background: url(images/metro/blue/cms/promote_small-hover.png) no-repeat  left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px solid #e4e4e4;
}
.postbitlegacy .postfoot .textcontrols a.infraction, .postbit .postfoot .textcontrols a.infraction  {
	background: url(images/metro/blue/buttons/add-infraction_sm.png) no-repeat  left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px solid #e4e4e4;
}
.postbitlegacy .postfoot .textcontrols a.infraction:hover, .postbit .postfoot .textcontrols a.infraction:hover  {
	background: url(images/metro/blue/buttons/add-infraction_sm-hover.png) no-repeat  left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px solid #e4e4e4;
}
.postbitlegacy .postfoot .textcontrols a.report, .postbit .postfoot .textcontrols a.report  {
	background: url(images/metro/blue/buttons/report-40b.png) no-repeat  left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px solid #e4e4e4;
}
.postbitlegacy .postfoot .textcontrols a.report:hover, .postbit .postfoot .textcontrols a.report:hover  {
	background: url(images/metro/blue/buttons/report-40b-hover.png) no-repeat  left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px solid #e4e4e4;
}
.postbitlegacy .postfoot .textcontrols a.blog, .postbit .postfoot .textcontrols a.blog  {
	background: url(images/metro/blue/misc/blog/blogpost_40b.png) no-repeat  left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px solid #e4e4e4;
}
.postbitlegacy .postfoot .textcontrols a.blog:hover, .postbit .postfoot .textcontrols a.blog:hover  {
	background: url(images/metro/blue/misc/blog/blogpost_40b-hover.png) no-repeat  left ;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px solid #e4e4e4;
}
.postbitlegacy .postfoot .textcontrols a.reputation, .postbit .postfoot .textcontrols a.reputation  {
	background: url(images/metro/blue/buttons/reputation-40b.png) no-repeat  left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px solid #e4e4e4;
}
.postbitlegacy .postfoot .textcontrols a.reputation:hover, .postbit .postfoot .textcontrols a.reputation:hover  {
	background: url(images/metro/blue/buttons/reputation-40b-hover.png) no-repeat  left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px solid #e4e4e4;
}
.postbitlegacy .postfoot .textcontrols a.ip, .postbit .postfoot .textcontrols a.ip  {
	background: url(images/metro/blue/buttons/ip-40b.png) no-repeat  left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px solid #e4e4e4;
}
.postbitlegacy .postfoot .textcontrols a.ip:hover, .postbit .postfoot .textcontrols a.ip:hover  {
	background: url(images/metro/blue/buttons/ip-40b-hover.png) no-repeat  left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px solid #e4e4e4;
}
.postbitlegacy .postfoot .textcontrols a.redcard, .postbit .postfoot .textcontrols a.redcard  {
	background: url(images/metro/blue/buttons/red-card_sm.png) no-repeat  left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px solid #e4e4e4;
}
.postbitlegacy .postfoot .textcontrols a.redcard:hover, .postbit .postfoot .textcontrols a.redcard:hover  {
	background: url(images/metro/blue/buttons/red-card_sm-hover.png) no-repeat  left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px solid #e4e4e4;
}
.postbitlegacy .postfoot .textcontrols a.yellowcard, .postbit .postfoot .textcontrols a.yellowcard  {
	background: url(images/metro/blue/buttons/yellow-card_sm.png) no-repeat  left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px solid #e4e4e4;
}
.postbitlegacy .postfoot .textcontrols a.yellowcard:hover, .postbit .postfoot .textcontrols a.yellowcard:hover  {
	background: url(images/metro/blue/buttons/yellow-card_sm-hover.png) no-repeat  left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px solid #e4e4e4;
}
.postbitlegacy .postfoot .textcontrols a.deleted, .postbit .postfoot .textcontrols a.deleted  {
	background: url(images/metro/blue/buttons/deleted_sm.png) no-repeat  left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px solid #e4e4e4;
}
.postbitlegacy .postfoot .textcontrols a.deleted:hover, .postbit .postfoot .textcontrols a.deleted:hover  {
	background: url(images/metro/blue/buttons/deleted_sm-hover.png) no-repeat  left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px solid #e4e4e4;
}
.postbitlegacy .postfoot .textcontrols a:hover, .postbit .postfoot .textcontrols a:hover {
	color: #43A6DF;
	background: ;
	_background-image: none;
}

.postbitlegacy .postfoot .textcontrols a.highlight, .postbit .postfoot .textcontrols a.highlight {
	background-color: ;
}

.postbitlegacy .postfoot .textcontrols a img, .postbit .postfoot .textcontrols a img {
	position: absolute;
	top: 2.4px;
	left: 3.4px;
}

.postbitlegacy .postfoot .textcontrols a:hover img, .postbit .postfoot .textcontrols a:hover img {
	top: 2.4px;
}

.postbitlegacy .postfoot .textcontrols .mobile.mobile_android, .postbit .postfoot .textcontrols .mobile.mobile_android,
.postbitlegacy .postfoot .textcontrols .mobile.mobile_iphone, .postbit .postfoot .textcontrols .mobile.mobile_iphone,
.postbitlegacy .postfoot .textcontrols .mobile.mobile_facebook, .postbit .postfoot .textcontrols .mobile.mobile_facebook
 {
	background: url(images/metro/blue/buttons/android_icon.png) no-repeat  left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px solid #e4e4e4;
}

.postbitlegacy .postfoot .textcontrols a.mobile_android:hover, .postbit .postfoot .textcontrols a.mobile_android:hover  {
	background: url(images/metro/blue/buttons/android_icon-hover.png) no-repeat  left;	
}

.postbitlegacy .postfoot .textcontrols .mobile.mobile_iphone, .postbit .postfoot .textcontrols .mobile.mobile_iphone  {
	background: url(images/metro/blue/buttons/iphone_icon.png) no-repeat  left;
}

.postbitlegacy .postfoot .textcontrols a.mobile_iphone:hover, .postbit .postfoot .textcontrols a.mobile_iphone:hover  {
	background: url(images/metro/blue/buttons/iphone_icon-hover.png) no-repeat  left;	
}

.postbitlegacy .postfoot .textcontrols .mobile.mobile_facebook, .postbit .postfoot .textcontrols .mobile.mobile_facebook  {
	background: url(images/metro/blue/buttons/facebook_icon.png) no-repeat  left;
}

.postbitlegacy .postfoot .textcontrols a.mobile_facebook:hover, .postbit .postfoot .textcontrols a.mobile_facebook:hover  {
	background: url(images/metro/blue/buttons/facebook_icon-hover.png) no-repeat  left;	
}

/*post bit deleted*/
.postbitdeleted, .postbitignored {
	margin-bottom: 12px;
	display:block;
	width: 100%;
	clear:both;
	position: relative;
	color: #3e3e3e;
	border: 1px solid #e4e4e4;
	float: left;
	background: #f2f2f2 none   ;
	_background-image: none;
}

.postbitdeleted hr, .postbitignored hr {
	display: none;
}

.postbitdeleted .posthead, .postbitignored .posthead {
	display:table;
	background: #43A6DF none   ;
	_background-image: none;
	border: 1px solid #43A6DF;
	height: 18px;
	padding: 9px 0;
	color: #ffffff;
	width: 100%;
	margin: -1px -1px 0;
	font:   normal 14px ;
}

.postbitdeleted .posthead .date, .postbitignored .posthead .date {
	display:inline-block;
	padding-left: 16px;
	margin-left: 12px;
	color: #ffffff;
	background:transparent url(images/metro/blue/statusicon/post_old.png) no-repeat center left;
	font:   normal 14px ;
}

.postbitdeleted .posthead .date .time, .postbitignored .date .time {
	color: #ffffff;
	font:   normal 14px ;
}

.postbitdeleted .posthead .postimod, .postbitignored .posthead .postimod {
	position: absolute;
	right: 12px;
	top: 10px;
}

.postbitdeleted .postbody, .postbitignored .postbody {
	padding: 0;
}

.postbitdeleted .postrow, .postbitignored .postrow {
	padding:  12px;
}

.postbitdeleted .userinfo .memberaction, .postbitignored .userinfo .memberaction {
	display: block;
}


.postbitdeleted .userinfo, .postbitignored .userinfo {
	display:block;
	background: transparent;
	position: relative;
	clear: both;
	padding: 6px 12px;
	border-bottom: 1px solid #e4e4e4;
	word-wrap: break-word;
}

.postbitdeleted .userinfo .username, .postbitignored .userinfo .username {
	display:block;
	float: left;
	clear: right;
	font-size: 13px;
	/*font-weight:bold;*/
}

.postbitdeleted .userinfo .moreinfo, .postbitignored .userinfo .moreinfo {
	float: left;
	display:block;
	position: relative;
	top: -5px;
}

.postbitdeleted .userinfo .usertitle, .postbitignored .userinfo .usertitle {
	clear:both;
	display:block
	width: 100%;
}

.postbitdeleted .userinfo .popupmenu a.popupctrl:hover, .postbitignored .userinfo .popupmenu a.popupctrl:hover {
	color: #43A6DF;
	text-decoration: underline;
}

.postbitdeleted .title, .postbitignored .title {
	font:   bold 14px 'Open Sans', sans-serif;
}

.postbitdeleted .nodecontrols, .postbitignored .nodecontrols {
	padding: 4px 0;
	padding-right: 12px;
	text-align: right;
	background: #f2f2f2 none   ;
	_background-image: none;
	font:   bold 11px 'Open Sans', sans-serif;
	height: 16px;
}

.postbitdeleted .nodecontrols .textcontrol, .postbitignored .nodecontrols .textcontrol {
	background: ;
	_background-image: none;
	border: 0px solid #e4e4e4;
	font:   bold 11px 'Open Sans', sans-serif;
}

.postbitdeleted .nodecontrols a.textcontrol:hover, .postbitignored .nodecontrols a.textcontrol:hover {
	background: ;
	_background-image: none;
	border: 0px solid #e4e4e4;
}

.userinfo .popupmenu:hover a.popupctrl {
	background-color:transparent;
}

.userinfo .popupgroup .popupmenu:hover a.popupctrl.active,
.userinfo .popupmenu a.popupctrl.active {
	background-color:transparent;
	color:inherit;
}
.postbit .userinfo .popupmenu .popupctrl {
	color:auto;
}

.postbit.imod_highlight .userinfo_noavatar,
.postbit.imod_highlight .userinfo,
.postbit.imod_highlight .postbody,
.postbitlegacy.imod_highlight .postdetails,
.postbitlegacy.imod_highlight .userinfo,
.postbitlegacy.imod_highlight .postbody,
.postbitdeleted.imod_highlight,
.postbitignored.imod_highlight {
	background:#FFEB90;
	color: #3e3e3e;
}


/* start styles for postbit_legacy */
.userinfo .popupmenu:hover a.popupctrl {
	background-color:transparent;
}
.userinfo .popupgroup .popupmenu:hover a.popupctrl.active,
.userinfo .popupmenu a.popupctrl.active {
	background-color:transparent;
	color:inherit;
}
.postbitlegacy .userinfo .popupmenu .popupctrl {
	color:auto;
}
/* end styles for postbit_legacy */

img.onlinestatus_noavatar {
	position: relative;
	top: 5px;
	left: -56px;
}
img.onlinestatus {
	position: relative;
	top: 5px;
	left: -4px;
}

.postbody img.inlineimg {
	vertical-align: bottom;
}

.postbody .lastedited .reason {
	font-weight: bold;
}

.postbitlegacy .userinfo .userinfo_extra {
	width:176px;
	float: left;
	font-size: 11px;
}

.hasad {
	display:block;
	margin-right: 300px;
}
.postbit .posttitle, .postbitlegacy .title
{
	border-bottom: 1px solid #e4e4e4;
	padding-bottom: 5px;
	margin-bottom: 5px;
}


/* CSS Document */
/* this might need to get renamed */
/* wgo */
.wgo_block {
	display:block;
	margin-top: 12px;
	/*-moz-border-radius-topright: ;
	-moz-border-radius-topleft: ;
	-webkit-border-top-right-radius: ;
	-webkit-border-top-left-radius: ;
	border-top-right-radius: ;
	border-top-left-radius: ;
	-moz-box-shadow: -2px 2px 2px none;
	-webkit-box-shadow: -2px 2px 2px none;
	box-shadow: -2px 2px 2px none;*/
	/*margin-bottom: 12px;*/
	margin-right: -2px;
}

.wgo_block .blockbody {
	border: 1px solid #e4e4e4;
	background: rgb(255, 255, 255) none   ;
	_background-image: none;
}

.wgo_block .blockhead {
	font-size:14px;
	font-weight:normal;
	color: rgb(255, 255, 255);
	background: #2e3539 none   ;
	_background-image: none;
	/*border-top: solid 1px #2e3539 none   ;*/
}

.wgo_block .time {
	color: #2E3539;
}

.wgo_block .section {
	display:block;
	padding: 0 0 12px;
	font:    12px ;
	color: #2E3539;
	clear:both;
	width: 100%;
}

.wgo_block .blocksubhead {
	padding-left: 14px;
	font: 13px;
	color: #2E3539;
	/*background: transparent;*/
	padding-bottom: 9px;
	padding-top: 9px;
	margin-bottom: 12px;
}

.wgo_block .section:first-child .blocksubhead {
	border-top: 0;
}

.wgo_block .section .blocksubhead img {
	padding-right: 6px;
}

.wgo_block .section div, .wgo_block .section ol {
	padding-left: 14px;
}

.wgo_block .section div p {
	padding-bottom: 6px;
}

.wgo_block .section div ol {
	padding-left: 0;
}

.wgo_block .section dl dt {
	display:inline;
}

.wgo_block .section dl dt:after {
	content:":";
}

.wgo_block .section dl dd {
	display: inline;
	margin-right:6px;
}

.wgo_block .section dl.icon_legends dt {
	float: left;
	clear: right;
	margin-right: 6px;
}

.wgo_block .section dl.icon_legends dt:after {
	content: "";
}

.wgo_block .section dl.icon_legends dd {
	margin-bottom: 6px;
	display:block;
}

#wgo_onlineusers .commalist li {
	margin-left: 1px; 
}

#wgo_birthdays .commalist li { 
	margin-left: 1px; 
}

.forum_info {
	margin-bottom: 6px;
	float: left;
	width: 100%;
	clear:both;
	position: relative;
	top: -12px;
	color: #2E3539;
	font:    12px ;
}

.forum_info .blockhead {
	font-size:14px;
	font-weight:normal;
	color: rgb(255, 255, 255);
	background: #2e3539 none   ;
	_background-image: none;
	border: 0 none ;
	margin-top: 12px;
	/*-moz-box-shadow: -2px 0 2px rgba(0, 0, 0, 0.3);
	-webkit-box-shadow: -2px 0 2px rgba(0, 0, 0, 0.3);
	box-shadow: -2px 0 2px rgba(0, 0, 0, 0.3);*/
}

.forum_info a.collapse {
	position: absolute;
	top: 15px;
}

.forum_info .blockbody {
	border-bottom: 1px solid #e4e4e4;
	border-left: 1px solid #e4e4e4;
	border-right: 1px solid #e4e4e4;
	background: rgb(255, 255, 255) none   ;
	_background-image: none;
	/*-moz-box-shadow: -2px 2px 2px rgba(0, 0, 0, 0.3);
	-webkit-box-shadow: -2px 2px 2px rgba(0, 0, 0, 0.3);
	box-shadow: -2px 2px 2px rgba(0, 0, 0, 0.3);*/
}

.forum_info_subblock, .info_subblock {
	padding: 6px 12px;
}

.forum_info_form .options_input_wrapper {
	float: right;
	display: inline-block;
}

.forum_info_form .options_input_block {
	float: left;
	display:inline-block;
	padding: 12px 12px;
}

.forum_info_form .options_input_block .description {
	display: none;
}

.forum_info_form .options_input_block label {
	display:block;
}

.forum_info_form .options_input_block .checkradio li {
	display:inline-block;
	margin-right: 12px;
}

.forum_info_form .options_input_block .button {
	position: relative;
	margin-top: 15.99px;
}

.forum_info .options_block_container, .thread_info .options_block_container {
	width: 100%;
	float: left;
	display:block;
	position: relative;
	top: 0;
	padding-top:0;
	margin-top: 0;
}

.forum_info .options_block, .thread_info .options_block, .forum_info .options_block2, .thread_info .options_block2 {
	width: 49%;
	padding-right: 0.5%;
	float: left;
	clear: right;
	position: relative;
}


.forum_info .options_block .options_correct, .thread_info .options_block .options_correct, 
.forum_info .options_block2 .options_correct, .thread_info .options_block2 .options_correct {
margin-right:-1.1%;
}

.forum_info .options_block2 {
	margin-left: 1%;
}

.thread_info .options_block2 {
	margin-right: 1%;
}

dl.icon_legends dt {
	float: left;
	clear: right;
	margin-right: 6px;
}

dl.icon_legends dt:after {
	content: "";
}

dl.icon_legends dd {
	margin-bottom: 6px;
	display:block;
}

.info_subblock ul li {
	margin-bottom: 2.4px;
}

.bbcodeblock ul li a, .rules_link a {
	font-weight:bold;
}


.thread_info {
	margin-bottom: 6px;
	float: left;
	width: 100%;
	clear:both;
	position: relative;
	/*top: -12px;*/
	margin-bottom: 0;
	color: #2E3539;
	font:    12px ;
}

.thread_info a {
	font-weight:;
}

.thread_info h4 {
	font-size:14px;
	font-weight:normal;
	color: rgb(255, 255, 255);
	background: #2e3539 none   ;
	_background-image: none;
	border: 0 none ;
	/*margin-top: 6px;*/
	/*-moz-box-shadow: -2px 2px 2px rgba(0, 0, 0, 0.3);
	-webkit-box-shadow: -2px 2px 2px rgba(0, 0, 0, 0.3);
	box-shadow: -2px 2px 2px rgba(0, 0, 0, 0.3);*/
}

.thread_info h5 {
	display: none;
}

.thread_info .blockbody {
	border-bottom: 1px solid #e4e4e4;
	border-left: 1px solid #e4e4e4;
	border-right: 1px solid #e4e4e4;
	background: rgb(255, 255, 255) none   ;
	_background-image: none;
	/*-moz-box-shadow: -2px 2px 2px rgba(0, 0, 0, 0.3);
	-webkit-box-shadow: -2px 2px 2px rgba(0, 0, 0, 0.3);
	box-shadow: -2px 2px 2px rgba(0, 0, 0, 0.3);*/
}

.thread_info .inner_block, .info_subblock {
	padding: 12px;
}

ul.icon_list li {
	display:block;
	width: 100%;
	margin-bottom: 6px;
}

.inner_block .commalist {
	/*margin-top: 5px;*/
}

#thread_info_block_1 {
	width:34.9%;
	float:left;
}

#thread_info_block_1 > * {
	margin-right:2px;
}

#thread_info_block_2 {
	width:65%;
	float:right;
}

#forumrules {
	border: 0;
	background: transparent;
}

/* Similar Threads */
.similar_threads {
	clear:both;
}

.similar_threads li {
	padding:12px;
}

ol.similar_threads li h6 a {
	font:    12px ;
}

.similar_threads .starter_forum {
	font-size:11px;
}

.similar_threads .titleblock {float:left}
.similar_threads .dateblock {float:right; text-align:right}




/* CSS Document */

blockquote .align_left
{
	float:left;
}	
blockquote .align_center
{
	display:block;
	margin:0 auto;
}
blockquote .align_right
{
	float:right;
}

blockquote .size_thumbnail
{
	max-height:150px;
	max-width:150px;
	width: auto !important;
	height: auto !important;
}
blockquote .size_medium
{
	max-height:300px;
	max-width:300px;
	width: auto !important;
	height: auto !important;
}
blockquote .size_large
{
	max-height:1024px;
	max-width:1024px;
	width: auto !important;
	height: auto !important;
}
blockquote .size_fullsize
{
	max-width:100%;
	width: auto !important;
}

blockquote .size_fullsize img
{
	overflow:hidden;
}

blockquote .caption
{
	font-size:9px;
	font-weight:bold;
	text-align:center;
	margin-top:6px;
}

blockquote
{
	overflow:hidden;
}


/* CSS Document */

#polloptnum {
	margin-right:12px;
}

#polltimeout
{
	float:none;
}

.formcontrols .blockrow input.option {
	clear:left;
	float:left;
	margin-bottom:0.5em;
}

.formcontrols .blockrow input.votes {
	float:left;
	margin-bottom:0.5em;
	margin-left:0.5em;
}

.pollbar1,
.pollbar2,
.pollbar3,
.pollbar4,
.pollbar5,
.pollbar6 {
	height:15px;
        border:0px  transparent;
	display:inline-block;
}

.pollbar1 {
	background:rgb(156,255,198) none   ;
}

.pollbar2 {
	background:rgb(255,132,132) none   ;
}

.pollbar3 {
	background:rgb(132,132,255) none   ;
}

.pollbar4 {
	background:rgb(255,231,132) none   ;
}

.pollbar5 {
	background:rgb(255,132,255) none   ;
}

.pollbar6 {
	background:rgb(132,255,255) none   ;
}

#pollinfo {
	padding-bottom:0;
	margin: 12px 60px 0;
	/*-moz-border-radius: 6px;
	-webkit-border-radius: 6px;
	border-radius: 6px;*/
	clear:both;
	border: 1px solid #e4e4e4;
	padding-right: 12px;
}

.polloptionsblock {
	padding-left: 120px; /*should be depending on the size of the icon or background */
	background: #ffffff url(images/misc/poll_question_mark.png) no-repeat 30px 10px; /* position based on image not padding */
}

.pollresultsblock {
	padding-left: 12px;
	background: #ffffff;
}

#pollinfo .blockhead, #pollinfo .pollsubhead, #pollinfo .blockrow, #pollinfo .blockfoot {
	background:transparent;
	border: 0;
	padding: 6px 0 0; 
	clear:both;
}

#pollinfo .blockbody {
	background:transparent;
}

#pollinfo .blockhead {
	width: 100%;
	float: left;
	clear:both;
}

#pollinfo .blockhead h2 {
	font-weight: normal;
	font-size: 19.5px;
	display: inline-block;
	float: left;
	color: rgb(187,0,0);
}

#pollinfo .blockhead .stats {
	float: right;
	color: #3e3e3e;
}

#pollinfo .blockhead .totalvotes {
	color: #3e3e3e;
	font-size: 13px;
	display: inline-block;
	margin-top: 6.5px;
	font-weight:bold;
}

#pollinfo .polltitle {
	color: #3e3e3e;
}

#pollinfo .blockhead .textcontrol {
	border: 0;
	padding: 0;
	background: transparent;
	display: inline-block;
	float: left;
	margin-left: 12px;
}

#pollinfo .blockhead .textcontrol img {
	position: relative;
	right: 0;
	top: 10px;
}

#pollinfo .blockhead .textcontrol:hover img {
	border-bottom: 1px dotted #3e3e3e;
}

#pollinfo .pollsubhead {
	clear:both;
	width: 100%;
}

#pollinfo .blockfoot {
	margin-left: 24px;
	padding-bottom: 12px;
}

#polloptions li {
	padding-top: 6px;
	margin-left: 24px; /* to make room for input box */
}

#polloptions li input {

}

/*
#pollinfo .textcontrol {
	float:right;
	font-size:11px;
	margin: 12px;
}
*/

#pollresults {
	border: 1px solid #e4e4e4;
	padding: 12px;
	background: #ffffff;
	margin: 0 auto;
	margin-top: 12px;
	clear:both;
	float: left;
	width: 98%;
}

#pollresults .blockrow {
	border-bottom:1 solid #e4e4e4;
}

#pollresults .blockrow:last-child {
	border-bottom:none;
}

#pollresults li p {
        display:block;
        position:relative;
	width: 30%;
        float: left;
        bottom:0;
}

#pollresults li .votes {
	font-size:11px;
        position:relative;
        display:block;
	float: left;
	min-width: 400px;
        width:70%;
}

#pollresults li .votes .pollbarwrapper {
	position: relative;
	width: 83%;
        display:block;
	float: left;
	clear: right;
}

#pollresults li .votes .pollbarwrapper div {
	float:left;	
}

#pollresults li .votes .numvotes {
        color:body_color;
        padding:0.1em 0.5em;
        display: block;
        margin-left: 0.5em;
        float: left;
	clear: right;
}

#pollresults li .percentvotes {
	position: absolute;
	right: 0px;
        top:0px;
}

#pollresults ol.commalist {
	padding:8px 8px 8px 0px;
	margin-top:8px;
	border-top:1 solid #e4e4e4;
	font-size:11px;
	clear:both;
}

#pollinfo .blockfoot a,
#pollinfo .blockfoot input {
	vertical-align:middle;
}

ol.previewbit li {
	list-style-type:decimal;
	margin-left:1.5em;
}

.formcontrols ul.multifield {
	clear:both;
	padding: 5px;
	margin-left: 207px;
	max-width: 491px;
}


/* CSS Document */

.lightbox {
	position:absolute;
	/* left:0; */
	top:0;
}

.lightbox > div {
	background-color:#000000;
	padding:14px;
	-moz-border-radius:14px;
	-webkit-border-radius:14px;
	border-radius:14px;
}

.lightbox > div > div {
	background-color:#F5F5F5;
	padding:6px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;	
	border-radius:5px;	
}

.lightbox .wider {
	width:106%;
}

.lightbox .picturerow {
	text-align:center;
}

.lightbox .buttonrow,
.lightbox .descrow {
	color:#666666;
	padding-top:4px;
	font-size:11px;
}

.lightbox .buttonrow .closebutton,
.lightbox .descrow .filename {
	float:right;
}

/*
.lightbox .progress {
	border:solid 4px #000000;
	border-bottom-width:0px
}
*/