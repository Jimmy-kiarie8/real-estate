import{_ as c}from"./AppLayout-4219f817.js";import p from"./DeleteUserForm-5cf855e6.js";import l from"./LogoutOtherBrowserSessionsForm-7589e75e.js";import{S as s}from"./SectionBorder-5a5cb60b.js";import f from"./TwoFactorAuthenticationForm-c288c921.js";import u from"./UpdatePasswordForm-943f6076.js";import d from"./UpdateProfileInformationForm-58bc1c37.js";import{o,c as _,w as n,a as i,d as r,b as t,e as a,F as h}from"./app-da126d6c.js";import"./_plugin-vue_export-helper-c27b6911.js";import"./Modal-4168d8c3.js";import"./SectionTitle-bd9784bd.js";import"./DangerButton-5eb7188f.js";import"./DialogModal-16d9e787.js";import"./TextInput-6dd1ba9e.js";import"./SecondaryButton-f2865e3f.js";import"./ActionMessage-cb5379d5.js";import"./PrimaryButton-f160fe13.js";import"./InputLabel-886f6b1d.js";import"./FormSection-28f678b2.js";const g=i("h2",{class:"font-semibold text-xl text-gray-800 leading-tight"}," Profile ",-1),$={class:"max-w-7xl mx-auto py-10 sm:px-6 lg:px-8"},w={key:0},k={key:1},y={key:2},G={__name:"Show",props:{confirmsTwoFactorAuthentication:Boolean,sessions:Array},setup(m){return(e,x)=>(o(),_(c,{title:"Profile"},{header:n(()=>[g]),default:n(()=>[i("div",null,[i("div",$,[e.$page.props.jetstream.canUpdateProfileInformation?(o(),r("div",w,[t(d,{user:e.$page.props.auth.user},null,8,["user"]),t(s)])):a("",!0),e.$page.props.jetstream.canUpdatePassword?(o(),r("div",k,[t(u,{class:"mt-10 sm:mt-0"}),t(s)])):a("",!0),e.$page.props.jetstream.canManageTwoFactorAuthentication?(o(),r("div",y,[t(f,{"requires-confirmation":m.confirmsTwoFactorAuthentication,class:"mt-10 sm:mt-0"},null,8,["requires-confirmation"]),t(s)])):a("",!0),t(l,{sessions:m.sessions,class:"mt-10 sm:mt-0"},null,8,["sessions"]),e.$page.props.jetstream.hasAccountDeletionFeatures?(o(),r(h,{key:3},[t(s),t(p,{class:"mt-10 sm:mt-0"})],64)):a("",!0)])])]),_:1}))}};export{G as default};