import{_ as x}from"./FormComponent-9a50734f.js";import{_ as b}from"./_plugin-vue_export-helper-c27b6911.js";import{i as t,o as h,c as k,w as e,b as o,A as y,f as a}from"./app-b0029e37.js";const w={props:{form_data:Object},components:{myForm:x},data(){return{dialog:!1,form:{}}},mounted(){},methods:{submit(){console.log(this.form_data),this.$inertia.post("/clients",this.form_data,{onError:()=>{},onSuccess:()=>{console.log("success")}})},close(){this.dialog=!1}}};function V(F,c,l,L,s,_){const n=t("v-btn"),d=t("v-divider"),i=t("v-card-title"),m=t("myForm"),f=t("v-card-text"),u=t("v-spacer"),p=t("v-card-actions"),v=t("v-card"),g=t("v-dialog"),C=t("v-row");return h(),k(C,{justify:"center"},{default:e(()=>[o(g,{persistent:"",modelValue:s.dialog,"onUpdate:modelValue":c[0]||(c[0]=r=>s.dialog=r),width:"800"},{activator:e(({props:r})=>[o(n,y({color:"info"},r),{default:e(()=>[a(" Create Lead ")]),_:2},1040)]),default:e(()=>[o(d),o(v,null,{default:e(()=>[o(i,{class:"text-h5"},{default:e(()=>[a(" Create A Lead ")]),_:1}),o(f,null,{default:e(()=>[o(m,{form_data:l.form_data},null,8,["form_data"])]),_:1}),o(p,null,{default:e(()=>[o(n,{variant:"outlined",color:"error",onClick:_.close},{default:e(()=>[a(" Close ")]),_:1},8,["onClick"]),o(u),o(n,{variant:"outlined",color:"primary",onClick:_.submit},{default:e(()=>[a(" Submit ")]),_:1},8,["onClick"])]),_:1})]),_:1})]),_:1},8,["modelValue"])]),_:1})}const N=b(w,[["render",V]]);export{N as default};
