import{X as P,Y as B,l as x,Q as me,H as A,K as F,_ as Q,$ as _,a0 as Z,b as f,a1 as je,a2 as V,a3 as Ke,A as Y,a4 as C,r as J,a5 as oe,a6 as ye,a7 as X,a8 as T,a9 as j,aa as L,ab as ue,ac as Ue,ad as ze,ae as We,af as K,ag as qe,F as N,ah as ee,ai as Qe,f as se,h as ie,t as Xe,aj as M,ak as Ye,E as de,al as Je,am as Ze,an as et,ao as tt,ap as ce}from"./app-54441529.js";const at=P({page:{type:[Number,String],default:1},itemsPerPage:{type:[Number,String],default:10}},"DataTable-paginate"),be=Symbol.for("vuetify:data-table-pagination");function lt(e){const a=B(e,"page",void 0,t=>+(t??1)),l=B(e,"itemsPerPage",void 0,t=>+(t??10));return{page:a,itemsPerPage:l}}function nt(e){const{page:a,itemsPerPage:l,itemsLength:t}=e,n=x(()=>l.value===-1?0:l.value*(a.value-1)),c=x(()=>l.value===-1?t.value:Math.min(t.value,n.value+l.value)),s=x(()=>l.value===-1||t.value===0?1:Math.ceil(t.value/l.value));me(()=>{a.value>s.value&&(a.value=s.value)});function u(m){l.value=m,a.value=1}function r(){a.value=Q(a.value+1,1,s.value)}function d(){a.value=Q(a.value-1,1,s.value)}function o(m){a.value=Q(m,1,s.value)}const g={page:a,itemsPerPage:l,startIndex:n,stopIndex:c,pageCount:s,itemsLength:t,nextPage:r,prevPage:d,setPage:o,setItemsPerPage:u};return A(be,g),g}function rt(){const e=F(be);if(!e)throw new Error("Missing pagination!");return e}function ot(e){const{items:a,startIndex:l,stopIndex:t,itemsPerPage:n}=e;return{paginatedItems:x(()=>n.value<=0?a.value:a.value.slice(l.value,t.value))}}const pe=P({prevIcon:{type:String,default:"$prev"},nextIcon:{type:String,default:"$next"},firstIcon:{type:String,default:"$first"},lastIcon:{type:String,default:"$last"},itemsPerPageText:{type:String,default:"$vuetify.dataFooter.itemsPerPageText"},pageText:{type:String,default:"$vuetify.dataFooter.pageText"},firstPageLabel:{type:String,default:"$vuetify.dataFooter.firstPage"},prevPageLabel:{type:String,default:"$vuetify.dataFooter.prevPage"},nextPageLabel:{type:String,default:"$vuetify.dataFooter.nextPage"},lastPageLabel:{type:String,default:"$vuetify.dataFooter.lastPage"},itemsPerPageOptions:{type:Array,default:()=>[{value:10,title:"10"},{value:25,title:"25"},{value:50,title:"50"},{value:100,title:"100"},{value:-1,title:"$vuetify.dataFooter.itemsPerPageAll"}]},showCurrentPage:Boolean},"VDataTableFooter"),fe=_()({name:"VDataTableFooter",props:pe(),setup(e,a){let{slots:l}=a;const{t}=Z(),{page:n,pageCount:c,startIndex:s,stopIndex:u,itemsLength:r,itemsPerPage:d,setItemsPerPage:o}=rt(),g=x(()=>e.itemsPerPageOptions.map(m=>({...m,title:t(m.title)})));return()=>{var m;return f("div",{class:"v-data-table-footer"},[(m=l.prepend)==null?void 0:m.call(l),f("div",{class:"v-data-table-footer__items-per-page"},[f("span",null,[t(e.itemsPerPageText)]),f(je,{items:g.value,modelValue:d.value,"onUpdate:modelValue":h=>o(Number(h)),density:"compact",variant:"outlined","hide-details":!0},null)]),f("div",{class:"v-data-table-footer__info"},[f("div",null,[t(e.pageText,r.value?s.value+1:0,u.value,r.value)])]),f("div",{class:"v-data-table-footer__pagination"},[f(V,{icon:e.firstIcon,variant:"plain",onClick:()=>n.value=1,disabled:n.value===1,"aria-label":t(e.firstPageLabel)},null),f(V,{icon:e.prevIcon,variant:"plain",onClick:()=>n.value=Math.max(1,n.value-1),disabled:n.value===1,"aria-label":t(e.prevPageLabel)},null),e.showCurrentPage&&f("span",{key:"page",class:"v-data-table-footer__page"},[n.value]),f(V,{icon:e.nextIcon,variant:"plain",onClick:()=>n.value=Math.min(c.value,n.value+1),disabled:n.value===c.value,"aria-label":t(e.nextPageLabel)},null),f(V,{icon:e.lastIcon,variant:"plain",onClick:()=>n.value=c.value,disabled:n.value===c.value,"aria-label":t(e.lastPageLabel)},null)])])}}}),te=Ke({align:{type:String,default:"start"},fixed:Boolean,fixedOffset:[Number,String],height:[Number,String],lastFixed:Boolean,noPadding:Boolean,tag:String,width:[Number,String]},(e,a)=>{let{slots:l,attrs:t}=a;const n=e.tag??"td";return f(n,Y({class:["v-data-table__td",{"v-data-table-column--fixed":e.fixed,"v-data-table-column--last-fixed":e.lastFixed,"v-data-table-column--no-padding":e.noPadding},`v-data-table-column--align-${e.align}`],style:{height:C(e.height),width:C(e.width),left:C(e.fixedOffset||null)}},t),{default:()=>{var c;return[(c=l.default)==null?void 0:c.call(l)]}})}),ut=P({headers:{type:Array,default:()=>[]}},"DataTable-header"),he=Symbol.for("vuetify:data-table-headers");function st(e,a){const l=J([]),t=J([]);me(()=>{var h,S,b;const c=e.headers.length?Array.isArray(e.headers[0])?e.headers:[e.headers]:[],s=c.flatMap((i,v)=>i.map(p=>({column:p,row:v}))),u=c.length,r={title:"",sortable:!1},d={...r,width:48};if((h=a==null?void 0:a.groupBy)!=null&&h.value.length){const i=s.findIndex(v=>{let{column:p}=v;return p.key==="data-table-group"});i<0?s.unshift({column:{...r,key:"data-table-group",title:"Group",rowspan:u},row:0}):s.splice(i,1,{column:{...r,...s[i].column},row:s[i].row})}if((S=a==null?void 0:a.showSelect)!=null&&S.value){const i=s.findIndex(v=>{let{column:p}=v;return p.key==="data-table-select"});i<0?s.unshift({column:{...d,key:"data-table-select",rowspan:u},row:0}):s.splice(i,1,{column:{...d,...s[i].column},row:s[i].row})}if((b=a==null?void 0:a.showExpand)!=null&&b.value){const i=s.findIndex(v=>{let{column:p}=v;return p.key==="data-table-expand"});i<0?s.push({column:{...d,key:"data-table-expand",rowspan:u},row:0}):s.splice(i,1,{column:{...d,...s[i].column},row:s[i].row})}const o=oe(u).map(()=>[]),g=oe(u).fill(0);s.forEach(i=>{let{column:v,row:p}=i;const k=v.key??(typeof v.value=="string"?v.value:null),w=v.value??v.key??null;for(let y=p;y<=p+(v.rowspan??1)-1;y++)o[y].push({...v,key:k,value:w,fixedOffset:g[y],sortable:v.sortable??k!=null}),g[y]+=Number(v.width??0)}),o.forEach(i=>{for(let v=i.length;v--;v>=0)if(i[v].fixed){i[v].lastFixed=!0;return}});const m=new Set;l.value=o.map(i=>{const v=[];for(const p of i)m.has(p.key)||(m.add(p.key),v.push(p));return v}),t.value=o.at(-1)??[]});const n={headers:l,columns:t};return A(he,n),n}function U(){const e=F(he);if(!e)throw new Error("Missing headers!");return e}const it={showSelectAll:!1,allSelected:()=>[],select:e=>{var t;let{items:a,value:l}=e;return new Set(l?[(t=a[0])==null?void 0:t.value]:[])},selectAll:e=>{let{selected:a}=e;return a}},Se={showSelectAll:!0,allSelected:e=>{let{currentPage:a}=e;return a},select:e=>{let{items:a,value:l,selected:t}=e;for(const n of a)l?t.add(n.value):t.delete(n.value);return t},selectAll:e=>{let{value:a,currentPage:l,selected:t}=e;return Se.select({items:l,value:a,selected:t})}},xe={showSelectAll:!0,allSelected:e=>{let{allItems:a}=e;return a},select:e=>{let{items:a,value:l,selected:t}=e;for(const n of a)l?t.add(n.value):t.delete(n.value);return t},selectAll:e=>{let{value:a,allItems:l,selected:t}=e;return xe.select({items:l,value:a,selected:t})}},dt=P({showSelect:Boolean,selectStrategy:{type:[String,Object],default:"page"},modelValue:{type:Array,default:()=>[]},valueComparator:{type:Function,default:ye}},"DataTable-select"),we=Symbol.for("vuetify:data-table-selection");function ct(e,a){let{allItems:l,currentPage:t}=a;const n=B(e,"modelValue",e.modelValue,i=>new Set(X(i).map(v=>{var p;return((p=l.value.find(k=>e.valueComparator(v,k.value)))==null?void 0:p.value)??v})),i=>[...i.values()]),c=x(()=>l.value.filter(i=>i.selectable)),s=x(()=>t.value.filter(i=>i.selectable)),u=x(()=>{if(typeof e.selectStrategy=="object")return e.selectStrategy;switch(e.selectStrategy){case"single":return it;case"all":return xe;case"page":default:return Se}});function r(i){return X(i).every(v=>n.value.has(v.value))}function d(i){return X(i).some(v=>n.value.has(v.value))}function o(i,v){const p=u.value.select({items:i,value:v,selected:new Set(n.value)});n.value=p}function g(i){o([i],!r([i]))}function m(i){const v=u.value.selectAll({value:i,allItems:c.value,currentPage:s.value,selected:new Set(n.value)});n.value=v}const h=x(()=>n.value.size>0),S=x(()=>{const i=u.value.allSelected({allItems:c.value,currentPage:s.value});return!!i.length&&r(i)}),b={toggleSelect:g,select:o,selectAll:m,isSelected:r,isSomeSelected:d,someSelected:h,allSelected:S,showSelectAll:u.value.showSelectAll};return A(we,b),b}function z(){const e=F(we);if(!e)throw new Error("Missing selection!");return e}const ft=P({sortBy:{type:Array,default:()=>[]},customKeySort:Object,multiSort:Boolean,mustSort:Boolean},"DataTable-sort"),Pe=Symbol.for("vuetify:data-table-sort");function vt(e){const a=B(e,"sortBy"),l=T(e,"mustSort"),t=T(e,"multiSort");return{sortBy:a,mustSort:l,multiSort:t}}function gt(e){const{sortBy:a,mustSort:l,multiSort:t,page:n}=e,c=r=>{if(r.key==null)return;let d=a.value.map(g=>({...g}))??[];const o=d.find(g=>g.key===r.key);o?o.order==="desc"?l.value?o.order="asc":d=d.filter(g=>g.key!==r.key):o.order="desc":t.value?d=[...d,{key:r.key,order:"asc"}]:d=[{key:r.key,order:"asc"}],a.value=d,n&&(n.value=1)};function s(r){return!!a.value.find(d=>d.key===r.key)}const u={sortBy:a,toggleSort:c,isSorted:s};return A(Pe,u),u}function mt(){const e=F(Pe);if(!e)throw new Error("Missing sort!");return e}function yt(e,a,l){const t=Z();return{sortedItems:x(()=>l.value.length?bt(a.value,l.value,t.current.value,e.customKeySort):a.value)}}function bt(e,a,l,t){const n=new Intl.Collator(l,{sensitivity:"accent",usage:"sort"});return[...e].sort((c,s)=>{for(let u=0;u<a.length;u++){const r=a[u].key,d=a[u].order??"asc";if(d===!1)continue;let o=j(c.raw,r),g=j(s.raw,r);if(d==="desc"&&([o,g]=[g,o]),t!=null&&t[r]){const m=t[r](o,g);if(!m)continue;return m}if(o instanceof Date&&g instanceof Date)return o.getTime()-g.getTime();if([o,g]=[o,g].map(m=>m!=null?m.toString().toLocaleLowerCase():m),o!==g)return L(o)&&L(g)?0:L(o)?-1:L(g)?1:!isNaN(o)&&!isNaN(g)?Number(o)-Number(g):n.compare(o,g)}return 0})}const ke=P({color:String,sticky:Boolean,multiSort:Boolean,sortAscIcon:{type:ue,default:"$sortAsc"},sortDescIcon:{type:ue,default:"$sortDesc"},...Ue()},"VDataTableHeaders"),ve=_()({name:"VDataTableHeaders",props:ke(),setup(e,a){let{slots:l,emit:t}=a;const{toggleSort:n,sortBy:c,isSorted:s}=mt(),{someSelected:u,allSelected:r,selectAll:d,showSelectAll:o}=z(),{columns:g,headers:m}=U(),{loaderClasses:h}=ze(e),S=(w,y)=>{if(!(!e.sticky&&!w.fixed))return{position:"sticky",zIndex:w.fixed?4:e.sticky?3:void 0,left:w.fixed?C(w.fixedOffset):void 0,top:e.sticky?`calc(var(--v-table-header-height) * ${y})`:void 0}};function b(w){const y=c.value.find(D=>D.key===w.key);return y?y.order==="asc"?e.sortAscIcon:e.sortDescIcon:e.sortAscIcon}const{backgroundColorClasses:i,backgroundColorStyles:v}=We(e,"color"),p=x(()=>({headers:m.value,columns:g.value,toggleSort:n,isSorted:s,sortBy:c.value,someSelected:u.value,allSelected:r.value,selectAll:d,getSortIcon:b,getFixedStyles:S})),k=w=>{let{column:y,x:D,y:$}=w;const W=y.key==="data-table-select"||y.key==="data-table-expand";return f(te,{tag:"th",align:y.align,class:["v-data-table__th",{"v-data-table__th--sortable":y.sortable,"v-data-table__th--sorted":s(y)},h.value],style:{width:C(y.width),minWidth:C(y.width),...S(y,$)},colspan:y.colspan,rowspan:y.rowspan,onClick:y.sortable?()=>n(y):void 0,lastFixed:y.lastFixed,noPadding:W},{default:()=>{var H;const G=`column.${y.key}`,R={column:y,selectAll:d,isSorted:s,toggleSort:n,sortBy:c.value,someSelected:u.value,allSelected:r.value,getSortIcon:b};return l[G]?l[G](R):y.key==="data-table-select"?((H=l["column.data-table-select"])==null?void 0:H.call(l,R))??(o&&f(ee,{modelValue:r.value,indeterminate:u.value&&!r.value,"onUpdate:modelValue":d},null)):f("div",{class:"v-data-table-header__content"},[f("span",null,[y.title]),y.sortable&&f(Qe,{key:"icon",class:"v-data-table-header__sort-icon",icon:b(y)},null),e.multiSort&&s(y)&&f("div",{key:"badge",class:["v-data-table-header__sort-badge",...i.value],style:v.value},[c.value.findIndex(E=>E.key===y.key)+1])])}})};K(()=>f(N,null,[l.headers?l.headers(p.value):m.value.map((w,y)=>f("tr",null,[w.map((D,$)=>f(k,{column:D,x:$,y},null))])),e.loading&&f("tr",{class:"v-data-table-progress"},[f("th",{colspan:g.value.length},[f(qe,{name:"v-data-table-progress",active:!0,color:typeof e.loading=="boolean"?void 0:e.loading,indeterminate:!0},{default:l.loader})])])]))}}),pt=P({groupBy:{type:Array,default:()=>[]}},"DataTable-group"),Te=Symbol.for("vuetify:data-table-group");function ht(e){return{groupBy:B(e,"groupBy")}}function St(e){const{groupBy:a,sortBy:l}=e,t=J(new Set),n=x(()=>a.value.map(d=>({...d,order:d.order??!1})).concat(l.value));function c(d){return t.value.has(d.id)}function s(d){const o=new Set(t.value);c(d)?o.delete(d.id):o.add(d.id),t.value=o}function u(d){function o(g){const m=[];for(const h of g.items)"type"in h&&h.type==="group"?m.push(...o(h)):m.push(h);return m}return o({type:"group",items:d,id:"dummy",key:"dummy",value:"dummy",depth:0})}const r={sortByWithGroups:n,toggleGroup:s,opened:t,groupBy:a,extractRows:u,isGroupOpen:c};return A(Te,r),r}function Ie(){const e=F(Te);if(!e)throw new Error("Missing group!");return e}function xt(e,a){if(!e.length)return[];const l=new Map;for(const t of e){const n=j(t.raw,a);l.has(n)||l.set(n,[]),l.get(n).push(t)}return l}function De(e,a){let l=arguments.length>2&&arguments[2]!==void 0?arguments[2]:0,t=arguments.length>3&&arguments[3]!==void 0?arguments[3]:"root";if(!a.length)return[];const n=xt(e,a[0]),c=[],s=a.slice(1);return n.forEach((u,r)=>{const d=a[0],o=`${t}_${d}_${r}`;c.push({depth:l,id:o,key:d,value:r,items:s.length?De(u,s,l+1,o):u,type:"group"})}),c}function Ve(e,a){const l=[];for(const t of e)"type"in t&&t.type==="group"?(t.value!=null&&l.push(t),(a.has(t.id)||t.value==null)&&l.push(...Ve(t.items,a))):l.push(t);return l}function wt(e,a,l){return{flatItems:x(()=>{if(!a.value.length)return e.value;const n=De(e.value,a.value.map(c=>c.key));return Ve(n,l.value)})}}const Pt=P({item:{type:Object,required:!0}},"VDataTableGroupHeaderRow"),kt=_()({name:"VDataTableGroupHeaderRow",props:Pt(),setup(e,a){let{slots:l}=a;const{isGroupOpen:t,toggleGroup:n,extractRows:c}=Ie(),{isSelected:s,isSomeSelected:u,select:r}=z(),{columns:d}=U(),o=x(()=>c([e.item]));return()=>f("tr",{class:"v-data-table-group-header-row",style:{"--v-data-table-group-header-row-depth":e.item.depth}},[d.value.map(g=>{var m,h;if(g.key==="data-table-group"){const S=t(e.item)?"$expand":"$next",b=()=>n(e.item);return((m=l["data-table-group"])==null?void 0:m.call(l,{item:e.item,count:o.value.length,props:{icon:S,onClick:b}}))??f(te,{class:"v-data-table-group-header-row__column"},{default:()=>[f(V,{size:"small",variant:"text",icon:S,onClick:b},null),f("span",null,[e.item.value]),f("span",null,[se("("),o.value.length,se(")")])]})}if(g.key==="data-table-select"){const S=s(o.value),b=u(o.value)&&!S,i=v=>r(o.value,v);return((h=l["data-table-select"])==null?void 0:h.call(l,{props:{modelValue:S,indeterminate:b,"onUpdate:modelValue":i}}))??f("td",null,[f(ee,{modelValue:S,indeterminate:b,"onUpdate:modelValue":i},null)])}return f("td",null,null)})])}}),Tt=P({expandOnClick:Boolean,showExpand:Boolean,expanded:{type:Array,default:()=>[]}},"DataTable-expand"),Ce=Symbol.for("vuetify:datatable:expanded");function It(e){const a=T(e,"expandOnClick"),l=B(e,"expanded",e.expanded,u=>new Set(u),u=>[...u.values()]);function t(u,r){const d=new Set(l.value);r?d.add(u.value):d.delete(u.value),l.value=d}function n(u){return l.value.has(u.value)}function c(u){t(u,!n(u))}const s={expand:t,expanded:l,expandOnClick:a,isExpanded:n,toggleExpand:c};return A(Ce,s),s}function Be(){const e=F(Ce);if(!e)throw new Error("foo");return e}const Dt=P({index:Number,item:Object,onClick:Function},"VDataTableRow"),Vt=_()({name:"VDataTableRow",props:Dt(),setup(e,a){let{slots:l}=a;const{isSelected:t,toggleSelect:n}=z(),{isExpanded:c,toggleExpand:s}=Be(),{columns:u}=U();K(()=>f("tr",{class:["v-data-table__tr",{"v-data-table__tr--clickable":!!e.onClick}],onClick:e.onClick},[e.item&&u.value.map((r,d)=>f(te,{align:r.align,fixed:r.fixed,fixedOffset:r.fixedOffset,lastFixed:r.lastFixed,noPadding:r.key==="data-table-select"||r.key==="data-table-expand",width:r.width},{default:()=>{var h,S;const o=e.item,g=`item.${r.key}`,m={index:e.index,item:o.raw,internalItem:o,value:j(o.columns,r.key),column:r,isSelected:t,toggleSelect:n,isExpanded:c,toggleExpand:s};return l[g]?l[g](m):r.key==="data-table-select"?((h=l["item.data-table-select"])==null?void 0:h.call(l,m))??f(ee,{disabled:!o.selectable,modelValue:t([o]),onClick:ie(()=>n(o),["stop"])},null):r.key==="data-table-expand"?((S=l["item.data-table-expand"])==null?void 0:S.call(l,m))??f(V,{icon:c(o)?"$collapse":"$expand",size:"small",variant:"text",onClick:ie(()=>s(o),["stop"])},null):Xe(m.value)}}))]))}}),Ae=P({loading:[Boolean,String],loadingText:{type:String,default:"$vuetify.dataIterator.loadingText"},hideNoData:Boolean,items:{type:Array,default:()=>[]},noDataText:{type:String,default:"$vuetify.noDataText"},rowHeight:Number,"onClick:row":Function},"VDataTableRows"),ge=_()({name:"VDataTableRows",props:Ae(),setup(e,a){let{emit:l,slots:t}=a;const{columns:n}=U(),{expandOnClick:c,toggleExpand:s,isExpanded:u}=Be(),{isSelected:r,toggleSelect:d}=z(),{toggleGroup:o,isGroupOpen:g}=Ie(),{t:m}=Z();return K(()=>{var h,S;return e.loading?f("tr",{class:"v-data-table-rows-loading",key:"loading"},[f("td",{colspan:n.value.length},[((h=t.loading)==null?void 0:h.call(t))??m(e.loadingText)])]):!e.loading&&!e.items.length&&!e.hideNoData?f("tr",{class:"v-data-table-rows-no-data",key:"no-data"},[f("td",{colspan:n.value.length},[((S=t["no-data"])==null?void 0:S.call(t))??m(e.noDataText)])]):f(N,null,[e.items.map((b,i)=>{var k;if(b.type==="group")return t["group-header"]?t["group-header"]({index:i,item:b,columns:n.value,isExpanded:u,toggleExpand:s,isSelected:r,toggleSelect:d,toggleGroup:o,isGroupOpen:g}):f(kt,{key:`group-header_${b.id}`,item:b},t);const v={index:i,item:b.raw,internalItem:b,columns:n.value,isExpanded:u,toggleExpand:s,isSelected:r,toggleSelect:d},p={...v,props:{key:`item_${b.key??b.index}`,onClick:c.value||e["onClick:row"]?w=>{var y;c.value&&s(b),(y=e["onClick:row"])==null||y.call(e,w,{item:b.raw,internalItem:b})}:void 0,index:i,item:b}};return f(N,null,[t.item?t.item(p):f(Vt,p.props,t),u(b)&&((k=t["expanded-row"])==null?void 0:k.call(t,v))])})])}),{}}}),Ct=P({items:{type:Array,default:()=>[]},itemValue:{type:[String,Array,Function],default:"id"},itemSelectable:{type:[String,Array,Function],default:null},returnObject:Boolean},"DataTable-items");function Bt(e,a,l,t){const n=e.returnObject?a:M(a,e.itemValue),c=M(a,e.itemSelectable,!0),s=t.reduce((u,r)=>(r.key!=null&&(u[r.key]=M(a,r.value)),u),{});return{type:"item",key:e.returnObject?M(a,e.itemValue):n,index:l,value:n,selectable:c,columns:s,raw:a}}function At(e,a,l){return a.map((t,n)=>Bt(e,t,n,l))}function Ft(e,a){return{items:x(()=>At(e,e.items,a.value))}}function _t(e){let{page:a,itemsPerPage:l,sortBy:t,groupBy:n,search:c}=e;const s=Ye("VDataTable"),u=x(()=>({page:a.value,itemsPerPage:l.value,sortBy:t.value,groupBy:n.value,search:c.value}));de(()=>c==null?void 0:c.value,()=>{a.value=1});let r=null;de(u,()=>{ye(r,u.value)||(s.emit("update:options",u.value),r=u.value)},{deep:!0,immediate:!0})}const $t=P({...Ae(),width:[String,Number],search:String,...Tt(),...pt(),...ut(),...Ct(),...dt(),...ft(),...ke(),...Je()},"DataTable"),Et=P({...at(),...$t(),...Ze(),...pe()},"VDataTable"),Nt=_()({name:"VDataTable",props:Et(),emits:{"update:modelValue":e=>!0,"update:page":e=>!0,"update:itemsPerPage":e=>!0,"update:sortBy":e=>!0,"update:options":e=>!0,"update:groupBy":e=>!0,"update:expanded":e=>!0},setup(e,a){let{emit:l,slots:t}=a;const{groupBy:n}=ht(e),{sortBy:c,multiSort:s,mustSort:u}=vt(e),{page:r,itemsPerPage:d}=lt(e),{columns:o,headers:g}=st(e,{groupBy:n,showSelect:T(e,"showSelect"),showExpand:T(e,"showExpand")}),{items:m}=Ft(e,o),h=T(e,"search"),{filteredItems:S}=et(e,m,h,{transform:q=>q.columns}),{toggleSort:b}=gt({sortBy:c,multiSort:s,mustSort:u,page:r}),{sortByWithGroups:i,opened:v,extractRows:p,isGroupOpen:k,toggleGroup:w}=St({groupBy:n,sortBy:c}),{sortedItems:y}=yt(e,S,i),{flatItems:D}=wt(y,n,v),$=x(()=>D.value.length),{startIndex:W,stopIndex:G,pageCount:R,setItemsPerPage:H}=nt({page:r,itemsPerPage:d,itemsLength:$}),{paginatedItems:E}=ot({items:D,startIndex:W,stopIndex:G,itemsPerPage:d}),ae=x(()=>p(E.value)),{isSelected:Fe,select:_e,selectAll:$e,toggleSelect:Ee,someSelected:Oe,allSelected:Ne}=ct(e,{allItems:m,currentPage:ae}),{isExpanded:Ge,toggleExpand:Re}=It(e);_t({page:r,itemsPerPage:d,sortBy:c,groupBy:n,search:h}),tt({VDataTableRows:{hideNoData:T(e,"hideNoData"),noDataText:T(e,"noDataText"),loading:T(e,"loading"),loadingText:T(e,"loadingText")}});const I=x(()=>({page:r.value,itemsPerPage:d.value,sortBy:c.value,pageCount:R.value,toggleSort:b,setItemsPerPage:H,someSelected:Oe.value,allSelected:Ne.value,isSelected:Fe,select:_e,selectAll:$e,toggleSelect:Ee,isExpanded:Ge,toggleExpand:Re,isGroupOpen:k,toggleGroup:w,items:ae.value,groupedItems:E.value,columns:o.value,headers:g.value}));return K(()=>{const[q]=fe.filterProps(e),[He]=ve.filterProps(e),[Le]=ge.filterProps(e),[Me]=ce.filterProps(e);return f(ce,Y({class:["v-data-table",{"v-data-table--show-select":e.showSelect,"v-data-table--loading":e.loading},e.class],style:e.style},Me),{top:()=>{var O;return(O=t.top)==null?void 0:O.call(t,I.value)},default:()=>{var O,le,ne,re;return t.default?t.default(I.value):f(N,null,[(O=t.colgroup)==null?void 0:O.call(t,I.value),f("thead",null,[f(ve,He,t)]),(le=t.thead)==null?void 0:le.call(t,I.value),f("tbody",null,[t.body?t.body(I.value):f(ge,Y(Le,{items:E.value}),t)]),(ne=t.tbody)==null?void 0:ne.call(t,I.value),(re=t.tfoot)==null?void 0:re.call(t,I.value)])},bottom:()=>t.bottom?t.bottom(I.value):f(N,null,[f(fe,q,{prepend:t["footer.prepend"]})])})}),{}}});export{Nt as V};