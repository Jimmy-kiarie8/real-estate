import{r as f,i as t,o as a,c as o,w as n,d as r,g as p,F as c,a as s,e as u,t as k}from"./app-b0029e37.js";const B={__name:"FormComponent",props:{form_data:Object},setup(v){return f(!1),(x,g)=>{const d=t("v-text-field"),_=t("v-textarea"),b=t("v-radio"),m=t("v-radio-group"),V=t("v-select"),y=t("v-col"),i=t("v-row");return a(),o(i,null,{default:n(()=>[(a(!0),r(c,null,p(v.form_data,e=>(a(),r(c,null,[e.display?(a(),o(y,{key:0,cols:"12",md:"6"},{default:n(()=>[s("div",null,[e.type=="text"?(a(),o(d,{key:0,clearable:"",label:e.label,variant:"outlined",modelValue:e.value,"onUpdate:modelValue":l=>e.value=l,type:"text"},null,8,["label","modelValue","onUpdate:modelValue"])):u("",!0),e.type=="number"?(a(),o(d,{key:1,clearable:"",label:e.label,variant:"outlined",modelValue:e.value,"onUpdate:modelValue":l=>e.value=l,type:"number"},null,8,["label","modelValue","onUpdate:modelValue"])):u("",!0),e.type=="date"?(a(),o(d,{key:2,clearable:"",label:e.label,variant:"outlined",modelValue:e.value,"onUpdate:modelValue":l=>e.value=l,type:"date"},null,8,["label","modelValue","onUpdate:modelValue"])):u("",!0),e.type=="long_text"?(a(),o(_,{key:3,clearable:"",label:e.label,variant:"outlined",modelValue:e.value,"onUpdate:modelValue":l=>e.value=l},null,8,["label","modelValue","onUpdate:modelValue"])):u("",!0),e.type=="radio"?(a(),o(m,{key:4,modelValue:e.value,"onUpdate:modelValue":l=>e.value=l,inline:"",color:"success"},{label:n(()=>[s("div",null,k(e.label),1)]),default:n(()=>[(a(!0),r(c,null,p(e.items,(l,U)=>(a(),o(b,{key:U,label:l,value:l},null,8,["label","value"]))),128))]),_:2},1032,["modelValue","onUpdate:modelValue"])):u("",!0),e.type=="select"?(a(),o(V,{key:5,clearable:"",chips:"",label:e.label,items:e.items,variant:"outlined","item-title":"label","item-value":"value",modelValue:e.value,"onUpdate:modelValue":l=>e.value=l,multiple:e.multiple,"return-object":e.multiple},null,8,["label","items","modelValue","onUpdate:modelValue","multiple","return-object"])):u("",!0)])]),_:2},1024)):u("",!0)],64))),256))]),_:1})}}};export{B as _};