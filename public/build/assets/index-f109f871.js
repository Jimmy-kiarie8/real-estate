import{_ as P}from"./MainLayout-9f0f9c2b.js";import z from"./bar-chart-985f99c3.js";import A from"./line-chart-2690085a.js";import F from"./doughnut-chart-d788da5b.js";import{_ as N}from"./_plugin-vue_export-helper-c27b6911.js";import{i as l,o as s,c as v,w as e,b as t,d as m,g as D,F as h,f as c,t as d,a as C,e as j}from"./app-b0029e37.js";import"./index-865d3cc2.js";const S={props:{total:Number,data:Object,leadsChart:Object,LeadData:Object,AgentActivityData:Object,LeadsConversionData:Object,LeadStatusDistributionData:Object,SystemCallsTrendData:Object,AgentPerformanceData:Object},components:{MainLayout:P,doughnutChart:F,lineChart:A,barChart:z},data(){return{search:"",page:1,itemsPerPage:5}},methods:{}},B={class:"d-flex py-3 justify-space-between"},V={class:"d-flex py-3 justify-space-between"},M={class:"d-flex py-3 justify-space-between"};function T(E,I,n,q,G,H){const i=l("v-icon"),y=l("v-card-item"),o=l("v-col"),_=l("v-row"),g=l("v-card-text"),f=l("v-list-item-subtitle"),p=l("v-list-item"),x=l("v-divider"),b=l("v-card-actions"),u=l("v-card"),k=l("barChart"),O=l("doughnutChart"),L=l("lineChart"),w=l("MainLayout");return s(),v(w,{title:"Dashboard"},{default:e(()=>[t(_,{"no-gutters":""},{default:e(()=>[(s(!0),m(h,null,D(n.data,(a,r)=>(s(),m(h,{key:r},[r<4?(s(),v(o,{key:0,cols:"12",sm:"3",style:{padding:"3px"}},{default:e(()=>[t(u,{class:"mx-auto"},{default:e(()=>[t(y,{title:a.label},{subtitle:e(()=>[t(i,{icon:a.icon,size:"18",color:a.iconColor,class:"me-1 pb-1"},null,8,["icon","color"]),c(" "+d(a.label),1)]),_:2},1032,["title"]),t(g,{class:"py-0"},{default:e(()=>[t(_,{align:"center","no-gutters":""},{default:e(()=>[t(o,{class:"text-h2",cols:"6"},{default:e(()=>[c(d(a.value),1)]),_:2},1024),t(o,{cols:"6",class:"text-right"},{default:e(()=>[t(i,{color:a.iconColor,icon:a.icon,size:"88"},null,8,["color","icon"])]),_:2},1024)]),_:2},1024)]),_:2},1024),C("div",B,[t(p,{density:"compact","prepend-icon":"mdi-store-24-hour"},{default:e(()=>[t(f,null,{default:e(()=>[c("Percentage")]),_:1})]),_:1}),t(p,{density:"compact","prepend-icon":"mdi-percent-circle"},{default:e(()=>[t(f,null,{default:e(()=>[c(d((a.value/n.total*100).toFixed(2))+"%",1)]),_:2},1024)]),_:2},1024)]),t(x),t(b)]),_:2},1024)]),_:2},1024)):j("",!0)],64))),128)),t(o,{cols:"12",sm:"6",style:{padding:"3px"}},{default:e(()=>[t(u,{class:"mx-auto"},{default:e(()=>[t(k,{chartData:n.LeadsConversionData},null,8,["chartData"])]),_:1})]),_:1}),t(o,{cols:"12",sm:"6",style:{padding:"3px"}},{default:e(()=>[t(u,{class:"mx-auto"},{default:e(()=>[t(k,{chartData:n.AgentPerformanceData},null,8,["chartData"])]),_:1})]),_:1})]),_:1}),t(_,{"no-gutters":""},{default:e(()=>[(s(!0),m(h,null,D(n.data,(a,r)=>(s(),m(h,{key:r},[r>4&&r<9?(s(),v(o,{key:0,cols:"12",sm:"3",style:{padding:"3px"}},{default:e(()=>[t(u,{class:"mx-auto"},{default:e(()=>[t(y,{title:a.label},{subtitle:e(()=>[t(i,{icon:a.icon,size:"18",color:a.iconColor,class:"me-1 pb-1"},null,8,["icon","color"]),c(" "+d(a.label),1)]),_:2},1032,["title"]),t(g,{class:"py-0"},{default:e(()=>[t(_,{align:"center","no-gutters":""},{default:e(()=>[t(o,{class:"text-h2",cols:"6"},{default:e(()=>[c(d(a.value),1)]),_:2},1024),t(o,{cols:"6",class:"text-right"},{default:e(()=>[t(i,{color:a.iconColor,icon:a.icon,size:"88"},null,8,["color","icon"])]),_:2},1024)]),_:2},1024)]),_:2},1024),C("div",V,[t(p,{density:"compact","prepend-icon":"mdi-store-24-hour"},{default:e(()=>[t(f,null,{default:e(()=>[c("Percentage")]),_:1})]),_:1}),t(p,{density:"compact","prepend-icon":"mdi-percent-circle"},{default:e(()=>[t(f,null,{default:e(()=>[c(d((a.value/n.total*100).toFixed(2))+"%",1)]),_:2},1024)]),_:2},1024)]),t(x),t(b)]),_:2},1024)]),_:2},1024)):j("",!0)],64))),128)),t(o,{cols:"12",sm:"4",style:{padding:"3px"}},{default:e(()=>[t(u,{class:"mx-auto"},{default:e(()=>[t(O,{chartData:n.LeadStatusDistributionData},null,8,["chartData"])]),_:1})]),_:1}),t(o,{cols:"12",sm:"4",style:{padding:"3px"}},{default:e(()=>[t(u,{class:"mx-auto"},{default:e(()=>[t(L,{chartData:n.AgentActivityData},null,8,["chartData"])]),_:1})]),_:1}),t(o,{cols:"12",sm:"4",style:{padding:"3px"}},{default:e(()=>[t(u,{class:"mx-auto"},{default:e(()=>[t(L,{chartData:n.SystemCallsTrendData},null,8,["chartData"])]),_:1})]),_:1})]),_:1}),t(_,{"no-gutters":""},{default:e(()=>[(s(!0),m(h,null,D(n.data,(a,r)=>(s(),m(h,{key:r},[r>9?(s(),v(o,{key:0,cols:"12",sm:"6",style:{padding:"3px"}},{default:e(()=>[t(u,{class:"mx-auto"},{default:e(()=>[t(y,{title:a.label},{subtitle:e(()=>[t(i,{icon:a.icon,size:"18",color:a.iconColor,class:"me-1 pb-1"},null,8,["icon","color"]),c(" "+d(a.label),1)]),_:2},1032,["title"]),t(g,{class:"py-0"},{default:e(()=>[t(_,{align:"center","no-gutters":""},{default:e(()=>[t(o,{class:"text-h2",cols:"6"},{default:e(()=>[c(d(a.value),1)]),_:2},1024),t(o,{cols:"6",class:"text-right"},{default:e(()=>[t(i,{color:a.iconColor,icon:a.icon,size:"88"},null,8,["color","icon"])]),_:2},1024)]),_:2},1024)]),_:2},1024),C("div",M,[t(p,{density:"compact","prepend-icon":"mdi-store-24-hour"},{default:e(()=>[t(f,null,{default:e(()=>[c("Percentage")]),_:1})]),_:1}),t(p,{density:"compact","prepend-icon":"mdi-percent-circle"},{default:e(()=>[t(f,null,{default:e(()=>[c(d((a.value/n.total*100).toFixed(2))+"%",1)]),_:2},1024)]),_:2},1024)]),t(x),t(b)]),_:2},1024)]),_:2},1024)):j("",!0)],64))),128))]),_:1})]),_:1})}const Y=N(S,[["render",T],["__scopeId","data-v-0e9697c5"]]);export{Y as default};