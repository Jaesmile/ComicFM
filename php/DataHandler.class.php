<?php
class DataHandler{
	
	public $dbhelper = NULL;
	
	public function __construct(){
		require_once 'DBHelper.class.php';
		$this->dbhelper = new DBHelper();
	}
	/**
	 * user login
	 * @param $username 
	 * @param $password
	 * @return user
	 */
	public function userLogin($username,$password){
		$sql = "select * from user where nickname = '$username' and password = '$password'";
		return $this->dbhelper->queryObjListBySql($sql);
	}
	/**
	 * user sign up
	 * @param unknown $nickname
	 * @param unknown $password
	 * @param unknown $email
	 * @param unknown $portrait_path
	 * @param unknown $self_statement
	 * @return the result of register
	 */
	public function userSignup($nickname,$password,$email,$portrait_path,$self_statement){
		$columns = array("nickname","password","email","portrait_path","self_statement");
		$values = array($nickname,$password,$email,$portrait_path,$self_statement);
		return $this->dbhelper->insertData($table, $columns, $values);
	}
	/**
	 * for user register ,checking nickname repeatable
	 * check nickname's availability when sign up
	 * @param unknown $nickname
	 * @return true if the nickname is never used,false otherwise.
	 */
	public function isNicknameAvailable($nickname){
		if($this->dbhelper->queryDataByAtr("user", "nickname", $nickname)){
			return false;
		}else{
			return true;
		}
	}
	/**
	 * for user register ,checking email repeatable
	 * check email's availability when sign up
	 * @param unknown $email
	 * @return true if the email is never used,false otherwise.
	 */
	public function isEmailAvailable($email){
		if($this->dbhelper->queryDataByAtr("user", "email", $email)){
			return false;
		}else{
			return true;
		}
	}
	/**
	 * for navigation | search bar 
	 * @param unknown $keyword
	 * @return comic_list array of the searching result
	 */
	public function mvSearch($keyword){
		$sql = "select * from mv where mv_name like '%$keyword%' or mv_des like '%$keyword%'";
		return $this->dbhelper->queryObjListBySql($sql);
	}
	/**
	 * for index 
	 * @param unknown $country
	 * @return a country's newest 5 items,which are needing by index page
	 */
	public function getNewMvListByType($country){
		$sql = "select * from mv where mv_country = '$country' and isChecked = true order by mv_create_time asc limit 5";
		return $this->dbhelper->queryObjListBySql($sql);
	}
	/**
	 * for index 
	 * @param unknown $country
	 * @return a country's newest 5 items of news list,which are needing by index page
	 */
	public function getMvRecListByType($country){
		$sql = "with rec_count(mv_id,value) as (select mv_id ,count(mv_id) from recommend_mv group by mv_id)"
				."select * from mv,rec_count where mv.mv_country = '$country' "
				."and mv.mv_id = rec_count.mv_id and isChecked = true order by count_mv_id desc limit 5";
		return $this->dbhelper->queryObjListBySql($sql);
		
	}
	/**for index 
	 * @return newest 5 news items ,which are needing by index page 
	 */
	public function getNewsListByTime(){
		$sql = "select * from news order by news_time asc limit 5";
		return $this->dbhelper->queryObjListBySql($sql);
	}
	/**
	 * for index 
	 * @return  recommend ,which are needing by index page
	 */
	public function getCListByRecNum(){
		//TODO
		$sql = "with rec_count(clist_id,value) as (select clist_id ,count(clist_id) from recommend_clist group by clist_id)"
				."select * from comic_list,rec_count where comic_list.clist_id = rec_count.clist_id "
				."and isChecked = true order by count_clist_id desc limit 5";
		return $this->dbhelper->queryObjListBySql($sql);
	}
	// for mv | mv_all
	public function getAllMvListByTime($country,$type){
		if($country == "all" && $type != "all")
			$sql = "select * from mv where mv_type = '$type' and isChecked = true order by mv_create_time asc";
		if($country == "all" && $type == "all")
			$sql = "select * from mv where isChecked = true order by mv_create_time asc";
		if($country != "all" && $type != "all")
			$sql = "select * from mv where mv_type = '$type' and mv_country = '$country' and isChecked = true order by mv_create_time asc";
		if($country != "all" && $type == "all")
			$sql = "select * from mv where mv_country = '$country'and isChecked = true order by mv_create_time asc";
		return $this->dbhelper->queryObjListBySql($sql);
	}
	// for mv | mv_all
	public function getAllMvListByRecNum($country,$type){
		if($country == "all" && $type != "all")
			$sql = "with rec_count(mv_id,value) as (select mv_id ,count(mv_id) from recommend_mv group by mv_id)"
					."select * from mv,rec_count where mv_type = '$type'"
					."and mv.mv_id = rec_count.mv_id and isChecked = true order by count_mv_id desc";
		if($country == "all" && $type == "all")
			$sql = "with rec_count(mv_id,value) as (select mv_id ,count(mv_id) from recommend_mv group by mv_id)"
					."select * from mv,rec_count where mv.mv_id = rec_count.mv_id and isChecked = true order by count_mv_id desc";
		if($country != "all" && $type != "all")
			$sql = "with rec_count(mv_id,value) as (select mv_id ,count(mv_id) from recommend_mv group by mv_id)"
					."select * from mv,rec_count where mv_type = '$type' and  mv_country = '$country'"
					."and mv.mv_id = rec_count.mv_id and isChecked = true order by count_mv_id desc";
		if($country != "all" && $type == "all")
			$sql = "with rec_count(mv_id,value) as (select mv_id ,count(mv_id) from recommend_mv group by mv_id)"
					."select * from mv,rec_count where mv.mv_id = rec_count.mv_id and  mv_country = '$country' and isChecked = true order by count_mv_id desc";
		return $this->dbhelper->queryObjListBySql($sql);
	}
	// for mv | mv_all
	public function getAllMvListByColNum($country,$type){
		if($country == "all" && $type != "all")
			$sql = "with col_count(mv_id,value) as (select mv_id ,count(mv_id) from collect_mv group by mv_id)"
					."select * from mv,col_count where mv_type = '$type'"
					."and mv.mv_id = col_count.mv_id and isChecked = true order by count_mv_id desc";
		if($country == "all" && $type == "all")
			$sql = "with col_count(mv_id,value) as (select mv_id ,count(mv_id) from collect_mv group by mv_id)"
					."select * from mv,col_count where mv.mv_id = col_count.mv_id and isChecked = true order by count_mv_id desc";
		if($country != "all" && $type != "all")
			$sql = "with col_count(mv_id,value) as (select mv_id ,count(mv_id) from collect_mv group by mv_id)"
					."select * from mv,col_count where mv_type = '$type' and  mv_country = '$country'"
					."and mv.mv_id = col_count.mv_id and isChecked = true order by count_mv_id desc";
		if($country != "all" && $type == "all")
			$sql = "with col_count(mv_id,value) as (select mv_id ,count(mv_id) from collect_mv group by mv_id)"
					."select * from mv,col_count where mv.mv_id = col_count.mv_id and  mv_country = '$country' and isChecked = true order by count_mv_id desc";
		return $this->dbhelper->queryObjListBySql($sql);
	}
	// for mv | mv_all
	public function getAllMvListByPlayNum($country,$type){
		if($country == "all" && $type != "all")
			$sql = "with play_count(mv_id,value) as (select mv_id ,count(mv_id) from play_mv group by mv_id)"
					."select * from mv,play_count where mv_type = '$type'"
					."and mv.mv_id = play_count.mv_id and isChecked = true order by count_mv_id desc";
		if($country == "all" && $type == "all")
			$sql = "with play_count(mv_id,value) as (select mv_id ,count(mv_id) from play_mv group by mv_id)"
					."select * from mv,play_count where mv.mv_id = play_count.mv_id and isChecked = true order by count_mv_id desc";
		if($country != "all" && $type != "all")
			$sql = "with play_count(mv_id,value) as (select mv_id ,count(mv_id) from play_mv group by mv_id)"
					."select * from mv,play_count where mv_type = '$type' and  mv_country = '$country'"
					."and mv.mv_id = play_count.mv_id and isChecked = true order by count_mv_id desc";
		if($country != "all" && $type == "all")
			$sql = "with play_count(mv_id,value) as (select mv_id ,count(mv_id) from play_mv group by mv_id)"
					."select * from mv,play_count where mv.mv_id = play_count.mv_id and  mv_country = '$country' and isChecked = true order by count_mv_id desc";
		return $this->dbhelper->queryObjListBySql($sql);
	}
	// for clist | clist_all
	public function getAllCListByTime($type){
		if($type != "all")
			$sql = "select * from comic_list where list_type = '$type' and isChecked = true order by create_time asc";
		else
			$sql = "select * from mv where isChecked = true order by create_time asc";
		return $this->dbhelper->queryObjListBySql($sql);
	}
	// for clist | clist_all
	public function getAllCListByRecNum($type){
		if($type != "all")
			$sql = "with rec_count(clist_id,value) as (select clist_id ,count(clist_id) from recommend_clist group by clist_id)"
					."select * from comic_list,rec_count where list_type = '$type'"
					."and comic_list.clist_id = rec_count.clist_id and isChecked = true order by count_clist_id desc";
		else
			$sql = "with rec_count(clist_id,value) as (select clist_id ,count(clist_id) from recommend_clist group by clist_id)" 
					. "select * from comic_list,rec_count where comic_list.clist_id = rec_count.clist_id and isChecked = true order by count_clist_id desc";
		return $this->dbhelper->queryObjListBySql ( $sql );
	}
	// for clist | clist_recommend
	public function getAllRecCList($type) {
		$sql = "with rec_count(clist_id,value) as (select clist_id ,count(clist_id) from recommend_clist group by clist_id)" 
				. "select * from comic_list,rec_count where comic_list.clist_id = rec_count.clist_id and isChecked = true order by count_clist_id desc";
		return $this->dbhelper->queryObjListBySql ( $sql );
	}
	// for mv | mv_recommend 
	public function getAllRecMvList() {
		$sql = "with rec_count(mv_id,value) as (select mv_id ,count(mv_id) from collect_mv group by mv_id)" 
				. "select * from mv,col_count where mv.mv_id = col_count.mv_id and isChecked = true order by count_mv_id desc";
		return $this->dbhelper->queryObjListBySql ( $sql );
	}
	
	// for news
	public function getAllNewsList() {
		$sql = "select * from news order by news_time asc";
		return $this->dbhelper->queryObjListBySql ( $sql );
	}
	
	//for recommend mv button action
	public function recommendMv($user_id,$mv_id){
		$sql = "INSERT INTO recommend_mv(user_id, mv_id) VALUES ('$user_id','$mv_id')";
		return $this->dbhelper->queryObjListBySql ( $sql );
	}
	//for recommend clist button action
	public function recommendClist($user_id,$clist_id){
		$sql = "INSERT INTO recommend_clist(user_id, clist_id) VALUES ('$user_id','$clist_id')";
		return $this->dbhelper->queryObjListBySql ( $sql );
	}
	//for collect mv button action
	public function collectdMv($user_id,$mv_id){
		$sql = "INSERT INTO collect_mv(user_id, mv_id) VALUES ('$user_id','$mv_id')";
		return $this->dbhelper->queryObjListBySql ( $sql );
	}
	//for follow clist button action
	public function followClist($user_id,$clist_id){
		$sql = "INSERT INTO follow_clist(user_id, clist_id) VALUES ('$user_id','$clist_id')";
		return $this->dbhelper->queryObjListBySql ( $sql );
	}
	//for play mv button action
	/**
	 * insert play record to play_mv table,select mv info in mv table
	 * @param unknown $mv_id
	 * @param unknown $user_id
	 * @return this mv item
	 */
	public function playMv($mv_id,$user_id){
		$time = time();
		$sql = "INSERT INTO play_mv(user_id, mv_id,play_time) VALUES ('$user_id','$mv_id','$time')";
		$this->dbhelper->queryObjListBySql ( $sql );
		$sql2 = "select * from mv where mv_id = '$mv_id'";
		return $this->dbhelper->queryObjListBySql ( $sql );
	}
	
	public function getMineMv($user_id){
		$sql = "select * from mv where user_id = '$user_id'";
		return $this->dbhelper->queryObjListBySql ( $sql );
	}
	
	public function getMineFriends($user_id){
		$sql = "select * from follow_some where follow_user_id = '$user_id'";
		return $this->dbhelper->queryObjListBySql ( $sql );
	}
	
	public function getMineFans($user_id){
		$sql = "select * from follow_some where followed_user_id = '$user_id'";
		return $this->dbhelper->queryObjListBySql ( $sql );
	}
	
	public function getMineNotice($user_id){
		$sql = "select * from notice where user_id = '$user_id' and isRead = false";
		return $this->dbhelper->queryObjListBySql ( $sql );
	}

	public function modifyMineInfo($user_id,$password,$portrait_path,$self_statement){
		$sql = "update user set password = '$password' , portrait_path = '$portrait_path',
		self_statementwhere = '$self_statement' where user_id = '$user_id'";
		return $this->dbhelper->queryObjListBySql ( $sql );
	}
	
	public function getCompleteNews($news_id){
		$sql = "select * from user where news_id = '$news_id'";
		return $this->dbhelper->queryObjListBySql ( $sql );
	}
	
	public function getClistDetailById($clist_id){
		$sql = "select * from comic_list where clist_id = '$clist_id'";
		return $this->dbhelper->queryObjListBySql ( $sql );
	}

	public function getMvDetailById($mv_id){
		$sql = "select * from mv where mv_id = '$mv_id'";
		return $this->dbhelper->queryObjListBySql ( $sql );
	}
	// get the number of users that recommend the mv
	public function getMvRecNum($mv_id){
		$sql = "select count(*) from recommend_mv where mv_id = '$mv_id'";
		return $this->dbhelper->queryObjListBySql ( $sql );
	}
	// get the number of users that collect the mv
	public function getMvColNum($mv_id){
		$sql = "select count(*) from collect_mv where mv_id = '$mv_id'";
		return $this->dbhelper->queryObjListBySql ( $sql );
	}
	// get the number of users that play the mv
	public function getMvPlayNum($mv_id){
		$sql = "select count(*) from play_mv where mv_id = '$mv_id'";
		return $this->dbhelper->queryObjListBySql ( $sql );
	}
	// get the number of users that recommend the clist
	public function getClistRecNum($clist_id){
		$sql = "select count(*) from recommend_clist where clist_id = '$clist_id'";
		return $this->dbhelper->queryObjListBySql ( $sql );
	}
	// get the number of users that follow the clist
	public function getClistfolNum($clist_id){
		$sql = "select count(*) from follow_clist where clist_id = '$clist_id'";
		return $this->dbhelper->queryObjListBySql ( $sql );
	}
	
}
	