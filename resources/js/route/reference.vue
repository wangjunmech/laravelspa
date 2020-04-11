export default
  [
    {
      path: '/schoolIndex',
      component: resolve => require(['@/components/schoolIndexPage'], resolve),
      redirect: '/schoolIndex/schoolPro',
      children: [
        {
        }
      ]
    }
  ]
