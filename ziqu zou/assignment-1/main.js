var avator={
	myName: 'PUT_YOUR_NAME',
	age: 0,
	weapon:{

		laser:{
		
			weaponName: 'Laser',
			damage: 1000,
			defense:0,
		},

		gun:{
			weaponName: 'Gun',
			damage: 500,
			defense:100,
		},

		sword:{
			weaponName: 'Sword',
			damage: 200,
			defense:500,
		},
	},

	creatPeople:function(name,age,weapon){


		avator.myName=name;
		avator.age=age;
		return('my name is  '+avator.myName+'. I am'+avator.age+' old.');

	},

	power:function(weapon1,weapon2){
		var damage1=0;
		var damage2=0;
		var defense1=0;
		var defense2=0;

		


		switch(weapon1){
			case 'Laser':
				damage1=avator.weapon.laser.damage;
				defense1=avator.weapon.laser.defense;
				break;
			case 'Gun':
				damage1=avator.weapon.gun.damage;
				defense1=avator.weapon.gun.defense;
				break;
			case 'Sword':
				damage1=avator.weapon.sowrd.damage;
				defense1=avator.weapon.sowrd.defense;
				break;
		}

		switch(weapon2){
			case 'Laser':
				damage2=avator.weapon.laser.damage;
				defense2=avator.weapon.laser.defense;
				break;
			case 'Gun':
				damage2=avator.weapon.gun.damage;
				defense2=avator.weapon.gun.defense;
				break;
			case 'Sword':
				damage2=avator.weapon.sword.damage;
				defense2=avator.weapon.sword.defense;
				break;
			}

		return('My weapon is:'+weapon1+'and'+weapon2+'My damage:'+(damage1+damage2)+'My defense:'+(defense1+defense2));

	}
	
	

}

//console.log('test'+avator.weapon.gun.damage);
console.log(avator.creatPeople('Wa',90));
console.log(avator.power('Laser','Sword'));

