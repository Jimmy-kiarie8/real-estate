import{T as _,o as d,c as u,w as a,f as l,a as e,b as t,t as n,u as o,n as f}from"./app-b0029e37.js";import{_ as h}from"./FormSection-4d1ef7de.js";import{_ as g,a as v}from"./TextInput-002c59e3.js";import{_ as c}from"./InputLabel-88a82b74.js";import{_ as $}from"./PrimaryButton-528c5645.js";import"./SectionTitle-f0db2fb0.js";import"./_plugin-vue_export-helper-c27b6911.js";const T={class:"col-span-6"},b={class:"flex items-center mt-2"},w=["src","alt"],V={class:"ml-4 leading-tight"},x={class:"text-gray-900"},y={class:"text-sm text-gray-700"},C={class:"col-span-6 sm:col-span-4"},O={__name:"CreateTeamForm",setup(B){const s=_({name:""}),i=()=>{s.post(route("teams.store"),{errorBag:"createTeam",preserveScroll:!0})};return(r,m)=>(d(),u(h,{onSubmitted:i},{title:a(()=>[l(" Team Details ")]),description:a(()=>[l(" Create a new team to collaborate with others on projects. ")]),form:a(()=>[e("div",T,[t(c,{value:"Team Owner"}),e("div",b,[e("img",{class:"object-cover w-12 h-12 rounded-full",src:r.$page.props.auth.user.profile_photo_url,alt:r.$page.props.auth.user.name},null,8,w),e("div",V,[e("div",x,n(r.$page.props.auth.user.name),1),e("div",y,n(r.$page.props.auth.user.email),1)])])]),e("div",C,[t(c,{for:"name",value:"Team Name"}),t(g,{id:"name",modelValue:o(s).name,"onUpdate:modelValue":m[0]||(m[0]=p=>o(s).name=p),type:"text",class:"block w-full mt-1",autofocus:""},null,8,["modelValue"]),t(v,{message:o(s).errors.name,class:"mt-2"},null,8,["message"])])]),actions:a(()=>[t($,{class:f({"opacity-25":o(s).processing}),disabled:o(s).processing},{default:a(()=>[l(" Create ")]),_:1},8,["class","disabled"])]),_:1}))}};export{O as default};
