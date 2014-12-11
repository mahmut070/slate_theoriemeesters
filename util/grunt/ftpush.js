// -------------------------------------
// Grunt ftpush
// -------------------------------------

module.exports = {

  // ----- Mirror child theme to server ----- //

  init_deploy_child: {
    auth: {
      host: '188.93.148.30',
      port: 21,
      authKey: 'md152179'
    },
    src: 'dist/child',
    dest: '/wp-content/themes/slate-<%= package.version %>_<%= projectName %>',
    simple: true,
    useList: false
  },

  deploy_child: {
    auth: {
      host: '188.93.148.30',
      port: 21,
      authKey: 'md152179'
    },
    src: 'dist/child',
    dest: '/wp-content/themes/slate-0.3.1_slate_theoriemeesters',
    simple: true,
    useList: true
  },

  // ----- Mirror parent theme to server ----- //

  deploy_parent: {
    auth: {
      host: '188.93.148.30',
      port: 21,
      authKey: 'md152179'
    },
    src: 'dist/parent',
    dest: '/wp-content/themes/slate-<%= package.version %>',
    simple: true,
    useList: false
  }
};
