import{_ as b}from"./FormComponent-c569025e.js";import{_ as k}from"./_plugin-vue_export-helper-c27b6911.js";import{i as e,o as y,c as w,w as t,b as o,A as S,f as n,t as d}from"./app-1d1cfcf2.js";const V={props:{form_data:Object,modelRoute:String,title:String},components:{myForm:b},data(){return{dialog:!1,form:{}}},mounted(){console.log(this.form_data)},methods:{submit(){console.log(this.form_data),this.$inertia.post(`/${this.modelRoute}`,this.form_data,{onError:()=>{},onSuccess:()=>{console.log("success")}})},close(){this.dialog=!1}}};function F(j,r,a,A,s,_){const i=e("v-icon"),c=e("v-btn"),m=e("v-divider"),u=e("v-card-title"),f=e("myForm"),v=e("v-card-text"),p=e("v-spacer"),g=e("v-card-actions"),C=e("v-card"),h=e("v-dialog"),x=e("v-row");return y(),w(x,{justify:"center"},{default:t(()=>[o(h,{persistent:"",modelValue:s.dialog,"onUpdate:modelValue":r[0]||(r[0]=l=>s.dialog=l),width:"800"},{activator:t(({props:l})=>[o(c,S({variant:"outlined",color:"info"},l),{default:t(()=>[o(i,null,{default:t(()=>[n("mdi-plus-circle")]),_:1}),n(" Create "+d(a.title),1)]),_:2},1040)]),default:t(()=>[o(m),o(C,null,{default:t(()=>[o(u,{class:"text-h5"},{default:t(()=>[n(" Create A "+d(a.title),1)]),_:1}),o(v,null,{default:t(()=>[o(f,{form_data:a.form_data},null,8,["form_data"])]),_:1}),o(g,null,{default:t(()=>[o(c,{variant:"outlined",color:"error",onClick:_.close},{default:t(()=>[n(" Close ")]),_:1},8,["onClick"]),o(p),o(c,{variant:"outlined",color:"info",onClick:_.submit},{default:t(()=>[o(i,null,{default:t(()=>[n("mdi-plus-circle")]),_:1}),n(" Submit ")]),_:1},8,["onClick"])]),_:1})]),_:1})]),_:1},8,["modelValue"])]),_:1})}const D=k(V,[["render",F]]);export{D as default};
