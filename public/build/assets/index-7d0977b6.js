import{_ as b}from"./MainLayout-9f0f9c2b.js";import C from"./create-37cb99d0.js";import M from"./edit-38019cee.js";import{_ as V}from"./_plugin-vue_export-helper-c27b6911.js";import{V as w}from"./VDataTable-ccb603b9.js";import{i as c,o as a,c as i,w as e,a as E,b as s,f as l,t as O}from"./app-b0029e37.js";import"./FormComponent-9a50734f.js";const P={props:{data:Object,form_data:Object,modelRoute:String,headers:Object,title:String},components:{MainLayout:b,VDataTable:w,myCreate:C,clientEdit:M},data(){return{search:"",page:1,itemsPerPage:5}},methods:{openEdit(n){this.$refs.clientModal.show(n)}},computed:{pageCount(){return Math.ceil(this.data.data.length/this.itemsPerPage)}}},R={class:"bg-white overflow-hidden shadow-xl sm:rounded-lg"};function S(n,m,r,j,d,_){const u=c("v-toolbar-title"),f=c("v-divider"),p=c("v-spacer"),y=c("myCreate"),v=c("v-toolbar"),h=c("v-text-field"),o=c("v-icon"),x=c("v-data-table"),k=c("clientEdit"),g=c("MainLayout");return a(),i(g,{title:"Order Management"},{default:e(()=>[E("div",R,[s(x,{headers:r.headers,items:r.data.data,"sort-by":[{key:"name",order:"asc"}],class:"elevation-2",search:d.search},{top:e(()=>[s(v,{flat:""},{default:e(()=>[s(u,null,{default:e(()=>[l(O(r.title)+" Management",1)]),_:1}),s(f,{class:"mx-4",inset:"",vertical:""}),s(p),s(y,{form_data:r.form_data,title:r.title,modelRoute:r.modelRoute},null,8,["form_data","title","modelRoute"])]),_:1}),s(h,{modelValue:d.search,"onUpdate:modelValue":m[0]||(m[0]=t=>d.search=t),"append-icon":"mdi-magnify",label:"Search","single-line":"","hide-details":""},null,8,["modelValue"])]),"item.actions":e(({item:t})=>[s(o,{size:"small",class:"me-2",onClick:z=>_.openEdit(t)},{default:e(()=>[l(" mdi-pencil ")]),_:2},1032,["onClick"]),s(o,{size:"small",onClick:z=>n.deleteItem(t)},{default:e(()=>[l(" mdi-delete ")]),_:2},1032,["onClick"])]),"item.is_controlled":e(({value:t})=>[t?(a(),i(o,{key:0,color:"success",size:"x-small"},{default:e(()=>[l("mdi-circle")]),_:1})):(a(),i(o,{key:1,color:"red",size:"x-small"},{default:e(()=>[l("mdi-circle")]),_:1}))]),"item.active":e(({value:t})=>[t?(a(),i(o,{key:0,color:"success",size:"x-small"},{default:e(()=>[l("mdi-circle")]),_:1})):(a(),i(o,{key:1,color:"red",size:"x-small"},{default:e(()=>[l("mdi-circle")]),_:1}))]),"item.online_channel":e(({value:t})=>[t?(a(),i(o,{key:0,color:"success",size:"x-small"},{default:e(()=>[l("mdi-circle")]),_:1})):(a(),i(o,{key:1,color:"red",size:"x-small"},{default:e(()=>[l("mdi-circle")]),_:1}))]),"item.prescription_only":e(({value:t})=>[t?(a(),i(o,{key:0,color:"success",size:"x-small"},{default:e(()=>[l("mdi-circle")]),_:1})):(a(),i(o,{key:1,color:"red",size:"x-small"},{default:e(()=>[l("mdi-circle")]),_:1}))]),"item.manage_inventory":e(({value:t})=>[t?(a(),i(o,{key:0,color:"success",size:"x-small"},{default:e(()=>[l("mdi-circle")]),_:1})):(a(),i(o,{key:1,color:"red",size:"x-small"},{default:e(()=>[l("mdi-circle")]),_:1}))]),"item.is_flagable":e(({value:t})=>[t?(a(),i(o,{key:0,color:"success",size:"x-small"},{default:e(()=>[l("mdi-circle")]),_:1})):(a(),i(o,{key:1,color:"red",size:"x-small"},{default:e(()=>[l("mdi-circle")]),_:1}))]),"item.in_stock":e(({value:t})=>[t?(a(),i(o,{key:0,color:"success",size:"x-small"},{default:e(()=>[l("mdi-circle")]),_:1})):(a(),i(o,{key:1,color:"red",size:"x-small"},{default:e(()=>[l("mdi-circle")]),_:1}))]),_:1},8,["headers","items","search"])]),s(k,{ref:"clientModal"},null,512)]),_:1})}const q=V(P,[["render",S]]);export{q as default};
