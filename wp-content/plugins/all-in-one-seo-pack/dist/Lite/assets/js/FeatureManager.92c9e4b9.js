import{f as w,c as F,o as M,u as x}from"./links.6fea55de.js";import{a as T}from"./allowed.c057c34a.js";import{n as U}from"./isArrayLikeObject.a77a8422.js";import{c as I}from"./news-sitemap.1ec2e03a.js";import{C as E,S as O}from"./Caret.660dc2fe.js";import{C as P,S as q,a as B,b as D}from"./SitemapsPro.95e26b7e.js";import{C as V}from"./Index.0177ebe2.js";import{C as z}from"./Index.af8a043b.js";import{G,a as R}from"./Row.c43f487a.js";import{o as d,c as g,a as n,y as u,D as c,m as r,l as p,d as f,E as h,t as l,F as Y,L as H,x as Z,H as y}from"./vue.esm-bundler.f425fb9b.js";import{_ as v}from"./_plugin-vue_export-helper.c114f5e4.js";import{S as K,a as W}from"./ImageSeo.6a2ec25f.js";import"./default-i18n.3881921e.js";import"./addons.393743a4.js";import"./upperFirst.62b3e825.js";import"./_stringToArray.4de3b1f3.js";import"./toString.eb8a9d40.js";import"./params.f0608262.js";import"./Url.50455516.js";import"./Tooltip.7040733e.js";import"./constants.2883a7a9.js";const Q={computed:{yourLicenseIsText(){const t=w();let e=this.$t.__("You have not yet added a valid license key.",this.$td);return t.license.isExpired&&(e=this.$t.__("Your license has expired.",this.$td)),t.license.isDisabled&&(e=this.$t.__("Your license has been disabled.",this.$td)),t.license.isInvalid&&(e=this.$t.__("Your license key is invalid.",this.$td)),e}}},j={},X={xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24",class:"aioseo-code"},J=n("path",{d:"M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z",fill:"currentColor"},null,-1),ee=[J];function te(t,e){return d(),g("svg",X,ee)}const se=v(j,[["render",te]]),oe={},ie={xmlns:"http://www.w3.org/2000/svg",viewBox:"0 -960 960 960",class:"aioseo-eeat"},ae=n("path",{d:"M440.118-560q33.839 0 57.817-24.097t23.978-57.935q0-33.838-23.978-57.696-23.978-23.859-57.817-23.859-33.838 0-57.934 23.859-24.097 23.858-24.097 57.696 0 33.838 24.097 57.935Q406.28-560 440.118-560ZM440-396.413q45.717 0 85.576-19.478 39.859-19.479 69.576-56.152-35.956-23.718-74.935-35.837Q481.239-520 440-520t-80.217 12.12q-38.979 12.119-74.935 35.837 29.717 36.673 69.576 56.152 39.859 19.478 85.576 19.478Zm386.391 286.935L637.913-297.956q-41.717 31.761-91.696 49.402Q496.239-230.913 440-230.913q-137.587 0-233.337-95.75T110.913-560q0-137.587 95.75-233.337T440-889.087q137.587 0 233.337 95.75T769.087-560q0 55.761-17.761 105.978-17.761 50.218-49.521 92.174L890.283-173.37l-63.892 63.892ZM440.113-321.913q99.156 0 168.565-69.522 69.409-69.522 69.409-168.678 0-99.156-69.409-168.565-69.409-69.409-168.565-69.409-99.156 0-168.678 69.409-69.522 69.409-69.522 168.565 0 99.156 69.522 168.678 69.522 69.522 168.678 69.522ZM440-560Z"},null,-1),re=[ae];function ne(t,e){return d(),g("svg",ie,re)}const le=v(oe,[["render",ne]]);const ce={setup(){return{addonsStore:F(),licenseStore:w(),pluginsStore:M(),rootStore:x()}},components:{CoreAlert:E,CoreFeatureCard:P,CoreModal:V,Cta:z,GridColumn:G,GridRow:R,SvgClose:O,SvgCode:se,SvgEeat:le,SvgImageSeo:K,SvgLinkAssistant:q,SvgLocalBusiness:W,SvgRedirect:B,SvgSitemapsPro:D},mixins:[Q],data(){return{allowed:T,ctaImg:I,showNetworkModal:!1,maybeActivate:!1,maybeDeactivate:!1,search:null,loading:{activateAll:!1,deactivateAll:!1},strings:{videoNewsSitemaps:this.$t.__("Video and News Sitemaps",this.$td),imageSeoOptimization:this.$t.__("Image SEO Optimization",this.$td),localBusinessSeo:this.$t.__("Local Business SEO",this.$td),advancedWooCommerce:this.$t.__("Advanced WooCommerce",this.$td),customTaxonomies:this.$t.__("SEO for Categories, Tags and Custom Taxonomies",this.$td),andMore:this.$t.__("And many more...",this.$td),activateAllFeatures:this.$t.__("Activate All Features",this.$td),deactivateAllFeatures:this.$t.__("Deactivate All Features",this.$td),searchForFeatures:this.$t.__("Search for Features...",this.$td),ctaHeaderText:this.$t.sprintf(this.$t.__("Upgrade %1$s to Pro and Unlock all Features!",this.$td),"AIOSEO"),ctaButtonText:this.$t.__("Unlock All Features",this.$td),aValidLicenseIsRequired:this.$t.__("A valid license key is required in order to use our addons.",this.$td),enterLicenseKey:this.$t.__("Enter License Key",this.$td),purchaseLicense:this.$t.__("Purchase License",this.$td),areYouSureNetworkChange:this.$t.__("This is a network-wide change.",this.$td),yesProcessNetworkChange:this.$t.__("Yes, process this network change",this.$td),noChangedMind:this.$t.__("No, I changed my mind",this.$td)},descriptions:{aioseoImageSeo:{description:"<p>"+this.$t.__("Globally control the Title attribute and Alt text for images in your content. These attributes are essential for both accessibility and SEO.",this.$td)+"</p>",version:0},aioseoVideoSitemap:{description:"<p>"+this.$t.__("The Video Sitemap works in much the same way as the XML Sitemap module, it generates an XML Sitemap specifically for video content on your site. Search engines use this information to display rich snippet information in search results.",this.$td)+"</p>",version:0},aioseoNewsSitemap:{description:"<p>"+this.$t.__("Our Google News Sitemap lets you control which content you submit to Google News and only contains articles that were published in the last 48 hours. In order to submit a News Sitemap to Google, you must have added your site to Google’s Publisher Center and had it approved.",this.$td)+"</p>",version:0},aioseoLocalBusiness:{description:"<p>"+this.$t.__("Local Business schema markup enables you to tell Google about your business, including your business name, address and phone number, opening hours and price range. This information may be displayed as a Knowledge Graph card or business carousel.",this.$td)+"</p>",version:0}}}},computed:{upgradeToday(){return this.$t.sprintf(this.$t.__("%1$s %2$s comes with many additional features to help take your site's SEO to the next level!",this.$td),"AIOSEO","Pro")},getAddons(){return this.addonsStore.addons.filter(t=>!this.search||t.name.toLowerCase().includes(this.search.toLowerCase()))},networkChangeMessage(){return this.activated?this.$t.__("Are you sure you want to deactivate these addons across the network?",this.$td):this.$t.__("Are you sure you want to activate these addons across the network?",this.$td)}},methods:{getAssetUrl:U,closeNetworkModal(t=!1){if(this.showNetworkModal=!1,t){const e=this.maybeActivate?"actuallyActivateAllFeatures":"actuallyDeactivateAllFeatures";this.maybeActivate=!1,this.maybeDeactivate=!1,this[e]()}},getIconComponent(t){return t&&t.startsWith("svg-")?t:"img"},getIconSrc(t,e){return typeof t=="string"&&t.startsWith("svg-")?null:typeof t=="string"?`data:image/svg+xml;base64,${t}`:e},getAddonDescription(t){const e=t.sku.replace(/-./g,m=>m.toUpperCase()[1]);return this.descriptions[e]&&this.descriptions[e].description&&t.descriptionVersion<=this.descriptions[e].version?this.descriptions[e].description:t.description},activateAllFeatures(){if(!this.$isPro||!this.licenseStore.license.isActive)return window.open(this.$links.utmUrl(this.rootStore.aioseo.data.isNetworkAdmin?"network-activate-all-features":"activate-all-features"));if(this.rootStore.aioseo.data.isNetworkAdmin){this.showNetworkModal=!0,this.maybeActivate=!0;return}this.actuallyActivateAllFeatures()},actuallyActivateAllFeatures(){this.loading.activateAll=!0;const t=this.addonsStore.addons.filter(e=>!e.requiresUpgrade).map(e=>({plugin:e.basename}));this.pluginsStore.installPlugins(t).then(e=>{const m=Object.keys(e.body.completed).map(s=>e.body.completed[s]);this.addonsStore.addons.map(s=>(m.includes(s.basename)&&(s.isActive=!0),s)),this.loading.activateAll=!1})},deactivateAllFeatures(){if(this.rootStore.aioseo.data.isNetworkAdmin){this.showNetworkModal=!0,this.maybeDeactivate=!0;return}this.actuallyDeactivateAllFeatures()},actuallyDeactivateAllFeatures(){this.loading.deactivateAll=!0;const t=this.addonsStore.addons.filter(e=>!e.requiresUpgrade).filter(e=>e.installed).map(e=>({plugin:e.basename}));this.pluginsStore.deactivatePlugins(t).then(e=>{const m=Object.keys(e.body.completed).map(s=>e.body.completed[s]);this.addonsStore.addons.map(s=>(m.includes(s.basename)&&(s.isActive=!1),s)),this.loading.deactivateAll=!1})}}},de={class:"aioseo-feature-manager"},ue={class:"aioseo-feature-manager-header"},he={key:0,class:"buttons"},me={class:"button-content"},_e={class:"search"},pe={class:"aioseo-feature-manager-addons"},ge={class:"buttons"},fe=["innerHTML"],ve={class:"large"},ye=["src"],we={class:"aioseo-modal-body"},Se={class:"reset-description"};function ke(t,e,m,s,o,a){const _=u("base-button"),S=u("base-input"),k=u("core-alert"),A=u("core-feature-card"),b=u("grid-column"),$=u("grid-row"),C=u("cta"),L=u("svg-close"),N=u("core-modal");return d(),g("div",de,[n("div",ue,[a.getAddons.filter(i=>i.canActivate===!0).length>0?(d(),g("div",he,[n("div",me,[c(_,{size:"medium",type:"blue",loading:o.loading.activateAll,onClick:a.activateAllFeatures},{default:r(()=>[h(l(o.strings.activateAllFeatures),1)]),_:1},8,["loading","onClick"]),s.licenseStore.isUnlicensed?f("",!0):(d(),p(_,{key:0,size:"medium",type:"gray",loading:o.loading.deactivateAll,onClick:a.deactivateAllFeatures},{default:r(()=>[h(l(o.strings.deactivateAllFeatures),1)]),_:1},8,["loading","onClick"]))])])):f("",!0),n("div",_e,[c(S,{modelValue:o.search,"onUpdate:modelValue":e[0]||(e[0]=i=>o.search=i),size:"medium",placeholder:o.strings.searchForFeatures,"prepend-icon":"search"},null,8,["modelValue","placeholder"])])]),n("div",pe,[t.$isPro&&s.licenseStore.isUnlicensed?(d(),p(k,{key:0,type:"red"},{default:r(()=>[n("strong",null,l(t.yourLicenseIsText),1),h(" "+l(o.strings.aValidLicenseIsRequired)+" ",1),n("div",ge,[c(_,{type:"blue",size:"small",tag:"a",href:s.rootStore.aioseo.data.isNetworkAdmin?s.rootStore.aioseo.urls.aio.networkSettings:s.rootStore.aioseo.urls.aio.settings},{default:r(()=>[h(l(o.strings.enterLicenseKey),1)]),_:1},8,["href"]),c(_,{type:"green",size:"small",tag:"a",target:"_blank",href:t.$links.getUpsellUrl("feature-manager-upgrade","no-license-key","pricing")},{default:r(()=>[h(l(o.strings.purchaseLicense),1)]),_:1},8,["href"])])]),_:1})):f("",!0),c($,null,{default:r(()=>[(d(!0),g(Y,null,H(a.getAddons,i=>(d(),p(b,{key:i.sku,sm:"6",lg:"4"},{default:r(()=>[c(A,{ref_for:!0,ref:"addons","can-activate":i.canActivate,"can-manage":o.allowed(i.capability),feature:i},{title:r(()=>[(d(),p(Z(a.getIconComponent(i.icon)),{src:a.getIconSrc(i.icon,i.image)},null,8,["src"])),h(" "+l(i.name),1)]),description:r(()=>[n("div",{innerHTML:a.getAddonDescription(i)},null,8,fe)]),_:2},1032,["can-activate","can-manage","feature"])]),_:2},1024))),128))]),_:1})]),s.licenseStore.isUnlicensed?(d(),p(C,{key:0,class:"feature-manager-upsell",type:2,"button-text":o.strings.ctaButtonText,floating:!1,"cta-link":t.$links.utmUrl("feature-manager","main-cta"),"learn-more-link":t.$links.getUpsellUrl("feature-manager","main-cta",t.$isPro?"pricing":"liteUpgrade"),"feature-list":t.$constants.UPSELL_FEATURE_LIST},{"header-text":r(()=>[n("span",ve,l(o.strings.ctaHeaderText),1)]),description:r(()=>[h(l(a.upgradeToday),1)]),"featured-image":r(()=>[n("img",{alt:"Purchase AIOSEO Today!",src:a.getAssetUrl(o.ctaImg)},null,8,ye)]),_:1},8,["button-text","cta-link","learn-more-link","feature-list"])):f("",!0),c(N,{show:o.showNetworkModal,"no-header":"",onClose:e[5]||(e[5]=i=>a.closeNetworkModal(!1)),classes:["aioseo-feature-manager-modal"]},{body:r(()=>[n("div",we,[n("button",{class:"close",onClick:e[2]||(e[2]=y(i=>a.closeNetworkModal(!1),["stop"]))},[c(L,{onClick:e[1]||(e[1]=y(i=>a.closeNetworkModal(!1),["stop"]))})]),n("h3",null,l(o.strings.areYouSureNetworkChange),1),n("div",Se,l(a.networkChangeMessage),1),c(_,{type:"blue",size:"medium",onClick:e[3]||(e[3]=i=>a.closeNetworkModal(!0))},{default:r(()=>[h(l(o.strings.yesProcessNetworkChange),1)]),_:1}),c(_,{type:"gray",size:"medium",onClick:e[4]||(e[4]=i=>a.closeNetworkModal(!1))},{default:r(()=>[h(l(o.strings.noChangedMind),1)]),_:1})])]),_:1},8,["show"])])}const Re=v(ce,[["render",ke]]);export{Re as default};
