import Middle from '../pages/Middle.vue'
import Header from '../pages/Header.vue'
import Footer from '../pages/Footer.vue'

const frontroutes = [
    {
        path: '/middle/:id',
        name: 'middle',
        component: Middle,
        children: [
            {
                // UserProfile will be rendered inside User's <router-view>
                // when /user/:id/profile is matched
                path: 'profile',
                component: Footer
            },
            {
                // UserPosts will be rendered inside User's <router-view>
                // when /user/:id/posts is matched
                path: 'posts',
                component: Footer
            }
        ]

    },
    {
        path:'/header',
        component: Header
    },
    {
        path:'/users',
        component : Footer
    },
    {
        path:'/saveuser',
        component: Footer
    }
];

export default  frontroutes;

/*

{
  path: '/settings',
  // You could also have named views at the top
  component: UserSettings,
  children: [{
    path: 'emails',
    component: UserEmailsSubscriptions
  }, {
    path: 'profile',
    components: {
      default: UserProfile,
      helper: UserProfilePreview
    }
  }]
}
 */
