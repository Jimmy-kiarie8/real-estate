import{_ as A}from"./MainLayout-9f0f9c2b.js";import{k as B,z as N,i as l,o as v,c as h,w as e,b as t,a as m,f as n,d as z,A as y,F as D,e as F,t as r,x as T,y as E}from"./app-b0029e37.js";import q from"./calls-d9deb57b.js";import G from"./analytics-00164078.js";import H from"./create-0acb2151.js";import J from"./create-046b8be1.js";import K from"./upload-90832585.js";import Q from"./status-4ab21659.js";import{_ as R}from"./_plugin-vue_export-helper-c27b6911.js";import{V as W}from"./VDataTable-ccb603b9.js";import"./edit-511295f8.js";import"./FormComponent-9a50734f.js";const X={props:{leads:Object,form_data:Object,client_data:Object,headers:Object,analytics:Object},components:{MainLayout:A,VDataTable:W,Link:B,myCall:q,myAnalytics:G,myClient:H,myLead:J,myUpload:K,myStatus:Q},data(){return{snackbar:!1,text:"Updated",search:"",drawer:!0,page:1,itemsPerPage:5}},methods:{openCall(a){console.log("🚀 ~ file: index.vue:91 ~ openCall ~ data:",a),this.$refs.modal.show(a)},upload(a){this.$refs.uploadModal.show(a)},status(a){this.$refs.statusModal.show(a)},editItem(a){console.log("🚀 ~ file: index.vue:80 ~ editItem ~ data:",a)},deleteItem(){},resolve(a){console.log("🚀 ~ file: index.vue:137 ~ resolve ~ item:",a),N.post(`resolve/${a.id}`,{}).then(s=>{this.snackbar=!0,console.log("🚀 ~ file: index.vue:140 ~ axios.post ~ res:",s)})}},computed:{pageCount(){return Math.ceil(this.leads.data.length/this.itemsPerPage)}}},b=a=>(T("data-v-225b3b10"),a=a(),E(),a),Y={class:"bg-white overflow-hidden shadow-xl sm:rounded-lg"},Z=b(()=>m("span",null,"Update status",-1)),$=b(()=>m("span",null,"Delete",-1)),ee=b(()=>m("span",null,"Mark as Completed",-1)),te={id:"tooltip"},oe={id:"tooltip"};function ae(a,s,f,le,c,_){const C=l("myAnalytics"),k=l("v-divider"),g=l("v-toolbar-title"),V=l("v-spacer"),M=l("myLead"),i=l("v-icon"),p=l("v-btn"),w=l("v-toolbar"),L=l("v-text-field"),u=l("v-tooltip"),I=l("v-data-table"),S=l("myCall"),U=l("myUpload"),j=l("myStatus"),O=l("v-snackbar"),P=l("MainLayout");return v(),h(P,{title:"Lead Management"},{default:e(()=>[t(C,{analytics:f.analytics},null,8,["analytics"]),t(k),m("div",Y,[t(I,{headers:f.headers,items:f.leads.data,"sort-by":[{key:"id",order:"desc"}],class:"elevation-2",search:c.search},{top:e(()=>[t(w,{flat:""},{default:e(()=>[t(g,null,{default:e(()=>[n("Leads Management")]),_:1}),t(k,{class:"mx-4",inset:"",vertical:""}),t(V),t(M,{form_data:f.form_data},null,8,["form_data"]),t(p,{color:"info",onClick:_.upload},{default:e(()=>[t(i,null,{default:e(()=>[n("mdi-file-excel")]),_:1}),n(" Upload Leads ")]),_:1},8,["onClick"])]),_:1}),t(L,{modelValue:c.search,"onUpdate:modelValue":s[0]||(s[0]=o=>c.search=o),"append-icon":"mdi-magnify",label:"Search","single-line":"","hide-details":""},null,8,["modelValue"])]),"item.actions":e(({item:o})=>[o.status!="Completed"?(v(),z(D,{key:0},[t(u,{location:"bottom"},{activator:e(({props:d})=>[t(p,y({icon:""},d,{onClick:x=>_.status(o)}),{default:e(()=>[t(i,{color:"info"},{default:e(()=>[n(" mdi-pencil ")]),_:1})]),_:2},1040,["onClick"])]),default:e(()=>[Z]),_:2},1024),t(u,{location:"bottom"},{activator:e(({props:d})=>[t(p,y({icon:""},d,{onClick:x=>_.deleteItem(o)}),{default:e(()=>[t(i,{color:"error"},{default:e(()=>[n(" mdi-delete ")]),_:1})]),_:2},1040,["onClick"])]),default:e(()=>[$]),_:2},1024),t(u,{location:"bottom"},{activator:e(({props:d})=>[t(p,y({icon:""},d,{onClick:x=>_.resolve(o)}),{default:e(()=>[t(i,{color:"success"},{default:e(()=>[n(" mdi-check-circle ")]),_:1})]),_:2},1040,["onClick"])]),default:e(()=>[ee]),_:2},1024)],64)):F("",!0)]),"item.phone":e(({item:o})=>[t(p,{"prepend-icon":"mdi-phone",onClick:d=>_.openCall(o)},{default:e(()=>[n(r(o.phone),1)]),_:2},1032,["onClick"])]),"item.closed":e(({value:o})=>[o?(v(),h(i,{key:0,color:"success",size:"x-small"},{default:e(()=>[n("mdi-circle")]),_:1})):(v(),h(i,{key:1,color:"red",size:"x-small"},{default:e(()=>[n("mdi-circle")]),_:1}))]),"item.notes":e(({value:o})=>[m("p",te,[n(r(o)+" ",1),t(u,{activator:"parent",location:"top"},{default:e(()=>[n(r(o),1)]),_:2},1024)])]),"item.client_address":e(({value:o})=>[m("p",oe,[n(r(o)+" ",1),t(u,{activator:"parent",location:"top"},{default:e(()=>[n(r(o),1)]),_:2},1024)])]),_:1},8,["headers","items","search"])]),t(S,{ref:"modal"},null,512),t(U,{ref:"uploadModal"},null,512),t(j,{ref:"statusModal"},null,512),t(O,{modelValue:c.snackbar,"onUpdate:modelValue":s[1]||(s[1]=o=>c.snackbar=o)},{default:e(()=>[n(r(c.text),1)]),_:1},8,["modelValue"])]),_:1})}const he=R(X,[["render",ae],["__scopeId","data-v-225b3b10"]]);export{he as default};