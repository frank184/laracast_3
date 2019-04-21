import NotFound from './components/NotFound';
import Logo from './components/Logo';
import LogoSymbol from './components/LogoSymbol';
import Colors from './components/Colors';
import Typography from './components/Typography';
import Mascot from './components/Mascot';
import Illustrations from './components/Illustrations';
import Wallpapers from './components/Wallpapers';
import Stats from './components/Stats';
import Achievements from './components/Achievements';

let Animations = () => 
  import(/* webpackChunkName: "loaders" */ './components/Animations');

export default {
  mode: 'history',
  linkActiveClass: 'font-bold',
  routes: [
    { path: '*', component: NotFound },
    { path: '/', component: Logo },
    { path: '/logo-symbol', component: LogoSymbol },
    { path: '/colors', component: Colors },
    { path: '/typography', component: Typography },
    { path: '/mascot', component: Mascot },
    { path: '/illustrations', component: Illustrations },
    { path: '/loaders-and-animations', component: Animations },
    { path: '/wallpapers', component: Wallpapers },
    { path: '/stats', component: Stats },
    { path: '/achievements', component: Achievements },
  ]
}
