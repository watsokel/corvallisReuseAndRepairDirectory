/*Iron Router*/
Router.route('/', function(){ //when user navigates to /
  this.layout('android'); //use layout called template name="android"
  this.render('android_home_bread_crumbs',{
    to: 'bread_crumbs'
  }); //render android_home_bread_crumbs template into yield breadcrubs
  this.render('reuse_repair_recycle_panels',{
    to: 'main_content'
  });
});

Router.route('/reuse', {where:"server"},function(){
  this.layout('android'); //use layout called template name="android"
  this.render('android_reuse_bread_crumbs',{
    to: 'bread_crumbs'
  }); //render android_reuse_bread_crumbs template into yield breadcrubs
  this.render('android_list_group',{
    to: 'main_content',
    data: function() {
      return ReuseItemCategories.find().fetch();
    }
  });
});


Router.route('/repair/repairItem/:itemName', function(){
  var self = this;
  console.log('new route for /repair?repairItem!');
  console.log(this.params.itemName);
  var selectedRepair = 'Repair';
  var selectedItem = this.params.itemName;
  var breadCrumbs = 'android_repair_item_bread_crumbs';
  var googleMap = 'android_map'; //show a map of businesses for that item
  var repairTitle = 'Businesses that repair '+selectedItem;
  this.layout('android');
  this.render(breadCrumbs,{
    to: 'bread_crumbs',
    data: function(){
      return { //one or both of selectedItem / selectedBusiness will be undefined
        selectedRepair: selectedRepair,
        selectedItem: selectedItem,
      }
    }
  });
  this.render('blank_template',{
    to:'map'
  });
  this.render('android_list_group',{
    to:'main_content'
  });
  Meteor.call('getRepairBusinesses', selectedItem, function (err, data) {
    console.log("getRepairBusinesses returned with data="+data);
    if (!err) {
      Session.set('repairBusinesses', data);
      console.log('printing returned datas lat');
      console.log(data[0].latitude);
      self.render(googleMap,{
        to: 'map', //yield map
        data: function(){
          console.log("Router, map render");
          console.log(selectedItem);
          return { //one or both of selectedItem / selectedBusiness will be undefined
            repairTitle: repairTitle,
            selectedRepair: selectedRepair, //should be undefined
            selectedItem: selectedItem,
          };
        }
      });
      self.render('android_list_group',{
        to: 'main_content', //yield main_content
        data: function() {
          console.log("selectedItem:");
          console.log(selectedItem);
          return {
            repairTitle: repairTitle,
            selectedRepair: selectedRepair,
            selectedItem: selectedItem,
          };
        }
      });
    }
  });
});



Router.route('/repair', function(){
  console.log("old repair route");
  console.log(this.params.query);
  let repairTitle, selectedRepair, selectedItem, selectedBusiness, breadCrumbs, googleMap;
  if(this.params.query.repairItem){ //user selected item on item page
    console.log("this.params.query.repairItem=");
    console.log(this.params.query.repairItem);
    selectedItem = this.params.query.repairItem;
    breadCrumbs = 'android_repair_item_bread_crumbs';
    googleMap = 'android_map'; //show a map of businesses for that item
    repairTitle = 'Businesses that repair '+selectedItem;
  } else if(this.params.query.repairBusiness){ //user selected a business
    selectedBusiness = this.params.query.repairBusiness;
    console.log(this.params.query.repairBusiness);
    googleMap = 'blank_template';
  } else {
    selectedRepair = 'Repair';
    repairTitle = 'Select Item to be Repaired';
    breadCrumbs = 'android_repair_bread_crumbs';
    googleMap = 'blank_template';
  }
  this.layout('android');
  this.render(breadCrumbs,{
    to: 'bread_crumbs',
    data: function(){
      //console.log("returning="+selectedItem);
      return { //one or both of selectedItem / selectedBusiness will be undefined
        selectedRepair: selectedRepair,
        selectedItem: selectedItem,
        selectedBusiness: selectedBusiness
      }
    }
  });
  this.render(googleMap,{
    to: 'map', //yield map
    data: function(){
      console.log("Router, map render");
      console.log(selectedItem);
      return { //one or both of selectedItem / selectedBusiness will be undefined
        repairTitle: repairTitle,
        selectedRepair: selectedRepair, //should be undefined
        selectedItem: selectedItem,
        selectedBusiness: selectedBusiness //should be undefined
      };
    }
  });
  this.render('android_list_group',{
    to: 'main_content', //yield main_content
    data: function() {
      console.log("selectedItem:");
      console.log(selectedItem);
      return {
        repairTitle: repairTitle,
        selectedRepair: selectedRepair,
        selectedItem: selectedItem,
        selectedBusiness: selectedBusiness
      };
    }
  });
});

Router.route('/recycle', function(){
  this.layout('android');
  this.render('android_recycle_bread_crumbs',{
    to: 'bread_crumbs'
  });
  this.render('android_list_group', {
    to: 'main_content'
  });
});

//Router.route('/admin'); //when user navigates to /admin, render template="admin"

Router.route('/admin', function(){
  this.layout('admin');
  this.render('admin_login_form',{
    to: 'admin_content'
  });
});

//Use a session variable to determine which service (reuse, repair, recycle)



/* Router.map is deprecated
Router.map(function () {
  this.route('android', { //route name = 'android', template = 'android'
    path: '/',  //and can be reached by going to site.com/ or localhost:3000
  });
  this.route('admin');  // By default, path = '/admin', template = 'admin'
});*/
