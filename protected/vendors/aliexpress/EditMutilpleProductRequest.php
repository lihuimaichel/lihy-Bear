<?php
/**
 * @desc   aliexpress 修改产品接口
 * @author AjunLongLive!
 * @time   2017-03-27
 */
class EditMutilpleProductRequest extends AliexpressApiAbstract {
    
	/** @var string 产品ID **/
	protected $_productId = null;
	
	/** @var string 产品描述 **/
	protected $_detail = null;
	
	/** @var array 多属性产品sku **/
	protected $_aeopAeProductSKUs = null;
	
	/** @var Integer 备货期  **/
	protected $_deliveryTime = null;
	
	/** @var int 服务模板ID **/
	protected $_promiseTemplateId = null;
	
	/** @var int 分类ID **/
	protected $_categoryId = null;
	
	/** @var 产品标题 **/
	protected $_subject = null;
	
	/** @var string 产品关键字 **/
	protected $_keyword = null;
	
	/** @var string 更多关键字1 **/
	protected $_productMoreKeywords1 = null;
	
	/** @var string 更多关键字2 **/
	protected $_productMoreKeywords2 = null;
	
	/** @var float 产品一口价 **/
	protected $_productPrice = null;
	
	/** @var Integer 运输模板ID **/
	protected $_freightTemplateId = null;
	
	/** @var string 产品图片地址 **/
	protected $_imageURLs = null;
	
	/** @var Integer 产品单位 **/
	protected $_productUnit = null;
	
	/** @var boolean 是否打包销售 **/
	protected $_packageType = null;
	
	/** @var integer 每包件数 **/
	protected $_lotNum = null;
	
	/** @var Integer 产品包装长 **/
	protected $_packageLength = null;
	
	/** @var Integer 产品包装宽 **/
	protected $_packageWidth = null;
	
	/** @var Integer 产品包装高 **/
	protected $_packageHeight = null;
	
	/** @var string 产品毛重 **/
	protected $_grossWeight = null;
	
	/** @var boolean 是否自定义记重 **/
	protected $_isPackSell = null;
	
	/** @var Integer 购买几件以内不增加运费 **/
	protected $_baseUnit = null;
	
	/** @var Integer 每增加件数 **/
	protected $_addUnit = null;
	
	/** @var String 对应增加的重量 **/
	protected $_addWeight = null;
	
	/** @var Integer 商品有效天数 **/
	protected $_wsValidNum = null;
	
	/** @var string 商品属性 **/
	protected $_aeopAeProductPropertys = null;
	
	/** @var Integer 批发最小数量 **/
	protected $_bulkOrder = null;
	
	/** @var Integer 批发折扣 **/
	protected $_bulkDiscount = null;
	
	/** @var int 尺码表模版ID **/
	protected $_sizechartId = null;
	
	/** @var string 库存扣减策略 **/
	protected $_reduceStrategy = null;
	
	/** @var Integer 产品分组ID **/
	protected $_groupId = null;
	
	/** @var string 货币单位 **/
	protected $_currencyCode = null;
	
	/**
	 * (non-PHPdoc)
	 * @see AliexpressApiAbstract::setApiMethod()
	 */
	public function setApiMethod() {
		$this->_apiMethod = 'api.editAeProduct';
	}
	
	/**
	 * @desc 设置请求
	 */
	public function setRequest() {
		$request = array();
		if (!is_null($this->_detail))
		    $request['detail'] = $this->_detail;
		if (!is_null($this->_productId))
		    $request['productId'] = $this->_productId;
		if (!is_null($this->_aeopAeProductSKUs))
		    $request['aeopAeProductSKUs'] = json_encode($this->_aeopAeProductSKUs);
		if (!is_null($this->_deliveryTime))
		    $request['deliveryTime'] = $this->_deliveryTime;
		if (!is_null($this->_promiseTemplateId))
		    $request['promiseTemplateId'] = $this->_promiseTemplateId;
		if (!is_null($this->_categoryId))
		    $request['categoryId'] = $this->_categoryId;
		if (!is_null($this->_subject))
		    $request['subject'] = $this->_subject;
		if (!is_null($this->_keyword))
		    $request['keyword'] = $this->_keyword;
		if (!is_null($this->_productMoreKeywords1))
			$request['productMoreKeywords1'] = $this->_productMoreKeywords1;
		if (!is_null($this->_productMoreKeywords2))
			$request['productMoreKeywords2'] = $this->_productMoreKeywords2;
		if (!is_null($this->_productPrice))
			$request['productPrice'] = $this->_productPrice;
		if (!is_null($this->_freightTemplateId))
		    $request['freightTemplateId'] = $this->_freightTemplateId;
		if (!is_null($this->_imageURLs))
		    $request['imageURLs'] = $this->_imageURLs;
		if (!is_null($this->_productUnit))
		    $request['productUnit'] = $this->_productUnit;
		if (!is_null($this->_packageType))
		    $request['packageType'] = $this->_packageType;
		if (!is_null($this->_lotNum))
		    $request['lotNum'] = $this->_lotNum;
		if (!is_null($this->_packageLength))
		    $request['packageLength'] = $this->_packageLength;
		if (!is_null($this->_packageWidth))
		    $request['packageWidth'] = $this->_packageWidth;
		if (!is_null($this->_packageHeight))
		    $request['packageHeight'] = $this->_packageHeight;
		if (!is_null($this->_grossWeight))
		    $request['grossWeight'] = $this->_grossWeight;
		if (!is_null($this->_isPackSell))
			$request['isPackSell'] = $this->_isPackSell;
		if (!is_null($this->_baseUnit))
			$request['baseUnit'] = $this->_baseUnit;
		if (!is_null($this->_addUnit))
			$request['addUnit'] = $this->_addUnit;
		if (!is_null($this->_addWeight))
			$request['addWeight'] = $this->_addWeight;
		if (!is_null($this->_wsValidNum))
			$request['wsValidNum'] = $this->_wsValidNum;
		if (!is_null($this->_aeopAeProductPropertys))
		    $request['aeopAeProductPropertys'] = json_encode($this->_aeopAeProductPropertys);
		if (!is_null($this->_bulkOrder))
			$request['bulkOrder'] = $this->_bulkOrder;
		if (!is_null($this->_bulkDiscount))
			$request['bulkDiscount'] = $this->_bulkDiscount;
		if (!is_null($this->_sizechartId))
			$request['sizechartId'] = $this->_sizechartId;
		if (!is_null($this->_reduceStrategy))
			$request['reduceStrategy'] = $this->_reduceStrategy;
		if (!is_null($this->_groupId))
			$request['groupId'] = $this->_groupId;
		if (!is_null($this->_currencyCode))
			$request['currencyCode'] = $this->_currencyCode;
		$this->request = $request;
		if(isset($_REQUEST['debug'])){
			print_r($request);
		}
 		
		return $this;
	}
	
	/**
	 * @desc 设置描述
	 * @param unknown $detail
	 */
	public function setProductId($productId) {
		$this->_productId = $productId;
	}
	
	/**
	 * @desc 设置描述
	 * @param unknown $detail
	 */
	public function setDetail($detail) {
		$this->_detail = $detail;
	}
	
	/**
	 * @desc 设置多属性产品
	 * @param unknown $skus
	 */
	public function setAeopAeProductSKUs($skus) {
		$this->_aeopAeProductSKUs = $skus;
	}
	
	/**
	 * @desc 设置产品备货期
	 * @param unknown $time
	 */
	public function setDeliveryTime($time) {
		$this->_deliveryTime = $time;
	}
	
	/**
	 * @desc 设置产品服务模板ID
	 * @param unknown $id
	 */
	public function setPromiseTemplateId($id) {
		$this->_promiseTemplateId = $id;
	}
	
	/**
	 * @desc 设置分类ID
	 * @param unknown $categoryID
	 */
	public function setCategoryID($categoryID) {
		$this->_categoryId = $categoryID;
	}
	
	/**
	 * @desc 设置产品标题
	 * @param unknown $subject
	 */
	public function setSubject($subject) {
		$this->_subject = $subject;
	}
	
	/**
	 * 
	 * @desc 设置产品关键字
	 * @param unknown $keywords
	 */
	public function setKeyword($keywords) {
		$this->_keyword = $keywords;
	}
	
	/**
	 * @desc 设置更多关键字1
	 * @param unknown $keywords
	 */
	public function setProductMoreKeywords1($keywords) {
		$this->_productMoreKeywords1 = $keywords;
	}
	
	/**
	 * @desc 设置更多关键字2
	 * @param unknown $keywords
	 */
	public function setProductMoreKeywords2($keywords) {
		$this->_productMoreKeywords2 = $keywords;
	}
	
	/**
	 * @desc 设置产品一口价
	 * @param unknown $price
	 */
	public function setProductPrice($price) {
		$this->_productPrice = $price;
	}
	
	/**
	 * @desc 设置运费模板ID
	 * @param unknown $id
	 */
	public function setFreightTemplateId($id) {
		$this->_freightTemplateId = $id;
	}
	
	/**
	 * @desc 设置产品图片
	 * @param unknown $images
	 */
	public function setImageURLs($images) {
		$this->_imageURLs = $images;
	}
	
	/**
	 * @desc 设置产品单位
	 * @param unknown $unit
	 */
	public function setProductUnit($unit) {
		$this->_productUnit = $unit;
	}
	
	/**
	 * @desc 是否打包销售
	 * @param unknown $isPackage
	 */
	public function setPackageType($isPackage) {
		$this->_packageType = $isPackage;
	}
	
	/**
	 * @desc 设置每包件数
	 * @param unknown $num
	 */
	public function setLotNum($num) {
		$this->_lotNum = $num;
	}
	
	/**
	 * @desc 设置包装长
	 * @param unknown $length
	 */
	public function setPackageLength($length) {
		$this->_packageLength = $length;
	}
	
	/**
	 * @desc 设置包装宽
	 * @param unknown $width
	 */
	public function setPackageWidth($width) {
		$this->_packageWidth = $width;
	}
	
	/**
	 * @desc 设置包装高
	 * @param unknown $height
	 */
	public function setPackageHeight($height) {
		$this->_packageHeight = $height;
	}
	
	/**
	 * @desc 设置产品毛重
	 * @param unknown $weight
	 */
	public function setGrossWeight($weight) {
		$this->_grossWeight = $weight;
	}
	
	/**
	 * @desc 设置是否自定义重量
	 * @param unknown $isPackShell
	 */
	public function setIsPackSell($isPackShell) {
		$this->_isPackSell = $isPackShell;
	}
	
	/**
	 * @desc 设置几件内不增加重量
	 * @param unknown $unit
	 */
	public function setBaseUnit($unit) {
		$this->_baseUnit = $unit;	
	}
	
	/**
	 * @desc 设置每增加件数
	 * @param unknown $unit
	 */
	public function setAddUnit($unit) {
		$this->_addUnit = $unit;
	}
	
	/**
	 * @desc 设置每增加件数增加的重量
	 * @param unknown $weight
	 */
	public function setAddWeight($weight) {
		$this->_addWeight = $weight;
	}
	
	/**
	 * @desc 设置商品有效天数
	 * @param unknown $day
	 */
	public function setWsValidNum($day) {
		$this->_wsValidNum = $day;
	}
	
	/**
	 * @desc 设置产品属性
	 * @param unknown $propertys
	 */
	public function setAeopAeProductPropertys($propertys) {
		$this->_aeopAeProductPropertys = $propertys;
	}
	
	/**
	 * @desc 设置批发最小数量
	 * @param unknown $num
	 */
	public function setBulkOrder($num) {
		$this->_bulkOrder = $num;
	}
	
	/**
	 * @desc 设置批发折扣
	 * @param unknown $discount
	 */
	public function setBulkDiscount($discount) {
		$this->_bulkDiscount = $discount;
	}
	
	/**
	 * @desc 设置尺码模板ID
	 * @param unknown $id
	 */
	public function setSizechartId($id) {
		$this->_sizechartId = $id;
	}
	
	/**
	 * @desc 设置扣减库存的方式
	 * @param unknown $strategy
	 */
	public function setReduceStrategy($strategy) {
		$this->_reduceStrategy = $strategy;
	}
	
	/**
	 * @desc 设置分组ID
	 * @param unknown $groupID
	 */
	public function setGroupId($groupID) {
		$this->_groupId = $groupID;
	}
	
	/**
	 * @desc 设置货币代码
	 * @param unknown $currencyCode
	 */
	public function setCurrencyCode($currencyCode) {
		$this->_currencyCode = $currencyCode;
	}
	
	/**
	 * @desc    获取错误的中文解释信息
	 * @param   $erroCode
	 * @return  详细的错误解释
	 */
	public function getErrorDetail($erroCode) {
		$errorArray = array(
		    '13005999' => '系统调用会员服务超时 系统内部错误，请联系技术支持。',
		    '13005005' => '帐户不存在，出现这种情况可能原因有： 1) 卖家提供的账号有误，系统查询不到这个会员信息请卖家检查账户信息是否正确。',
		    '07004403' => 'currencyCode与aeopAeProductSKUs参数中的currencyCode属性设置有误。对于俄罗斯本地卖家，currencyCode参数和aeopAeProductSKUs数据结构中的currencyCode参数必须都设置成RUB。对于非俄罗斯卖家，currencyCode参数和aeopAeProductSKUs数据结构中的currencyCode参数可以不提供，如果需要提供这两个参数，那么它们的取值必须为USD',
		    '07004404' => 'currencyCode与aeopAeProductSKUs参数中的currencyCode属性设置有误。非俄罗斯卖家错误的将currencyCode参数和aeopAeProductSKUs数据结构中的currencyCode参数设置成了RUB，请改为USD',
		    '07004001' => 'currencyCode与aeopAeProductSKUs参数中的currencyCode属性设置有误。即currencyCode参数和aeopAeProductSKUs数据结构中的currencyCode这两个参数设置的不一致。应该同时为RUB或者USD。如果是非俄罗斯卖家，currencyCode参数和aeopAeProductSKUs数据结构中的currencyCode参数可以不提供。否则的话，这两个属性应该同时为USD',
		    '13019996' => 'productId参数不合法，应该是一个正整数',
		    '13024000' => 'productId所指定的产品不存在',
		    '13022997' => 'productId所指定的产品无SKU信息，导致商品无法被编辑',
		    '13029999' => '查询商品信息时发生系统错误请联系技术支持，报告问题。',
		    '13002998' => 'aeopAeProductSKUs参数的格式错误。具体的出错原因可能有以下几种： 1). 参数类型错误：请查看aeopAeProductSKUs数据结构中对各个属性类型的声明。对于String类型的属性，其取值必须用双引号括起来。 对于数字类型的属性，其取值就填一个数字即可，不能用双引号括起来',
		    '13002995' => 'aeopAeProductSKUs参数中所有aeopSKUProperty数组长度不一致',
		    '13002999' => 'aeopAeProductPropertys参数的格式错误。具体的出错原因可能有以下几种： 1). 参数类型错误：请查看aeopAeProductPropertys数据结构中对各个属性类型的声明。对于String类型的属性，其取值必须用双引号括起来。 对于数字类型的属性，其取值就填一个数字即可，不能用双引号括起来',
		    '13004997' => '查询商品活动状态超时系统内部异常，请联系技术支持。',
		    '13004996' => '查询商品服务模版信息超时系统内部异常，请联系技术支持。',
		    '13001030' => '商品正在活动中，不允许修改商品信息',
		    '13001999' => '查询商品活动可编辑字段超时系统内部异常，请联系技术支持。',
		    '13004020' => '当前卖家不在海外仓白名单内，不能编辑海外仓商品',
		    '13004999' => '调用白名单校验服务超时系统内部超时，请联系技术支持。',
		    '13004021' => '类目白名单校验失败。当前卖家没有加入到发布商品所在类目的白名单中，无法发布此类目下的商品如果需要加入白名单，请咨询客服如何加入。',
		    '13200021' => 'deliveryTime参数未设置,请检查当前请求中是否提供了deliveryTime参数。',
		    '13200051' => 'freightTemplateId参数未设置,请检查当前请求中是否提供了freightTemplateId参数。',
		    '13200063' => 'subject参数未设置,请检查当前请求中是否提供了subject参数。',
		    '13200061' => 'subject参数包含了一些非英文字符 ,请检查subject参数中是否包含了非英文参数。',
		    '13200062' => 'subject参数包含了一些非法字符。这些非法字符的ASCII编码不在[0, 128]之间,请检查subject参数是否包含了上述的非法字符。',
		    '13200064' => 'subject参数的长度超过了128个字符,请检查subject参数的长度。',
		    '13200101' => 'categoryId参数未设置,请检查当前请求中是否提供了categoryId参数。',
		    '13205002' => 'wsValidNum参数的取值不在14～30天之间,请检查wsValidNum参数的值是否在14～30天之间。',
		    '13201001' => 'detail参数未设置,请检查当前请求中是否提供了detail参数。',
		    '13201002' => 'detail参数包含了一些非英文字符,请检查detail参数中是否包含了非英文参数。',
		    '13201003' => 'detail参数中包含了@符号(这会于后面的字符组成一个邮箱地址)或者一些非阿里系的外链。即详描中包含的站点信息不在以下列表中： 1. img.vip.alibaba.com 2. uploan.alibaba.com 3. style.alibaba.com 4. img.alibaba.com 5. *.aliimg.com 6. cp.aliimg.com 淘代销商品不在此范围之内',
		    '13201004' => 'detail参数的的长度超过了60000个字符,请检查detail参数的长度。',
		    '13201021' => 'aeopAeProductPropertys参数中的attrName属性包含了一些非英文字符',
		    '13201022' => 'aeopAeProductPropertys参数中的attrName属性包含了一些非法字符',
		    '13201023' => 'aeopAeProductPropertys参数中的attrName属性长度超过了40个字符',
		    '13201031' => 'aeopAeProductPropertys参数中的attrValue属性包含了一些非英文字符',
		    '13201032' => 'aeopAeProductPropertys参数中的attrValue属性包含了一些非法字符',
		    '13201033' => 'aeopAeProductPropertys参数中的attrValue属性长度超过了70个字符',
		    '13202001' => 'productUnit参数未设置',
		    '13202021' => 'grossWeight参数未设置',
		    '13204021' => 'imageURLs参数未设置,请检查当前请求中是否包含了imageURLs参数。',
		    '13001009' => 'imageURLs参数未设置,请检查当前请求中是否包含了imageURLs参数。',
		    '13005003' => '当前卖家账户被处罚，无法发布商品,具体原因请联系我们的客服。',
		    '13005001' => '当前卖家账户未通过实名认证，无法发布商品,请先实名认证后再发商品。',
		    '13001024' => 'productId参数所指定的产品ID不存在。导致无法编辑商品',
		    '13005006' => 'productId参数所指定的产品不属于当前卖家。无法编辑这个商品',
		    '13001041' => 'productId参数所指定的产品已处于审核不通过状态，不允许被编辑',
		    '13001029' => 'productId参数所指定的产品已处于审核中，不允许被编辑',
		    '13004016' => '商品必填类目属性未填',
		    '13004007' => 'aeopAeProductPropertys参数填写错误。具体原因有以下几种： 1）非法的类目属性，至少存在一个类目属性的attrNameId不属于当前商品所在的类目。 2）存在重复的类目属性。至少存在一个类目属性的attrName或者attrNameId相同。 3）非法的类目属性值。至少存在一个类目属性的attrValue取值不合法。 4）存在过期的类目属性。 5）自定义类目属性填写错误。 6）其他未知错误。',
            '13004013' => 'aeopAeProductPropertys参数填写错误。具体原因有以下几种： 1）非法的类目属性，至少存在一个类目属性的attrNameId不属于当前商品所在的类目。 2）存在重复的类目属性。至少存在一个类目属性的attrName或者attrNameId相同。 3）非法的类目属性值。至少存在一个类目属性的attrValue取值不合法。 4）存在过期的类目属性。 5）自定义类目属性填写错误。 6）其他未知错误。',
		    '13004014' => 'aeopAeProductPropertys参数填写错误。具体原因有以下几种： 1）非法的类目属性，至少存在一个类目属性的attrNameId不属于当前商品所在的类目。 2）存在重复的类目属性。至少存在一个类目属性的attrName或者attrNameId相同。 3）非法的类目属性值。至少存在一个类目属性的attrValue取值不合法。 4）存在过期的类目属性。 5）自定义类目属性填写错误。 6）其他未知错误。',
            '13004015' => 'aeopAeProductPropertys参数填写错误。具体原因有以下几种： 1）非法的类目属性，至少存在一个类目属性的attrNameId不属于当前商品所在的类目。 2）存在重复的类目属性。至少存在一个类目属性的attrName或者attrNameId相同。 3）非法的类目属性值。至少存在一个类目属性的attrValue取值不合法。 4）存在过期的类目属性。 5）自定义类目属性填写错误。 6）其他未知错误',
            '13004019' => '当前卖家未加入商品商品所在类目的白名单，无法发布当前类目下的商品',
            '13003001' => '当前商品的详描中存在盗图',
		    '13001007' => 'categoryId参数所指定的类目属于非叶子类目，无法编辑商品',
		    '13001008' => 'categoryId参数所指定的类目不存在，无法编辑商品',
		    '13001032' => 'categoryId参数所指定的类目是属于一个假一赔三类目，但当前账户的卖家未加入假一赔三服务，无法编辑商品',
		    '13004017' => 'aeopAeProductPropertys参数中的所有非自定义属性加起来的长度超过了4000个字符',
		    '13004018' => 'aeopAeProductPropertys参数中的所有自定义属性加起来的长度超过了4000个字符',
		    '13001021' => 'bulkOrder参数和bulkDiscount参数必须同时存在或者不设置',
		    '13001013' => 'deliveryTime参数值超过了当前类目所规定的上限',
		    '13001014' => 'bulkOrder参数取值不合法，应该位于[1,99]之间',
		    '13001015' => 'bulkDiscount参数取值不合法。应该位于[2,100000]之间',
		    '13001016' => 'groupId参数所指定的产品分组不存在',
		    '13003002' => 'detail参数中所关联的产品模块超过了2个',
		    '13003003' => 'detail参数中所关联的产品模块中至少有一个无内容',
		    '13001001' => 'imageURLs参数中主图的张数超过了6张',
		    '13001017' => 'imageURLs参数中图片的格式不合法',
		    '13001028' => 'imageURLs参数中有图片丢失',
		    '13004001' => 'packageType参数设置为true（打包出售）。但是未提供lotNum参数或者lotNum参数的取值不在2～100000之间',
		    '13004008' => 'isPackSell参数设置为true(支持自定义计重)。但是未提供addUnit参数或者addUnit参数的取值不在1～1000之间',
		    '13004009' => 'isPackSell参数设置为true(支持自定义计重)。但是未提供baseUnit参数或者baseUnit参数的取值不在1～1000之间',
		    '13004010' => 'isPacketSell参数设置为true(支持自定义计重)。但是未提供addWeight参数或者addWeight参数的取值不在0.001～500.00之间',
		    '13004002' => 'packageHeight参数未设置或者packageHeight参数的取值不在1-700之间',
		    '13004003' => 'packageLength参数未设置或者packageLength参数的取值不在1-700之间',
		    '13004004' => 'packageWidth参数未设置或者packageWidth参数的取值不在1-700之间',
		    '13004006' => 'grossWeight参数未设置或者grossWeight参数的取值不在0.001～500.00之间',
		    '13004005' => '产品包装尺寸的最大值(packageLength, packageWidth, packageHeight三者之间的最大值)+ 2*(packageHeight+packageLength+packageWidth - 最大值) &amp;gt; 2700',
            '13004011' => 'productUnit参数取值非法。请查看productUnit的参数说明，选择合适的单位',
            '13001002' => 'freightTemplateId参数设置错误。出错原因可能有以下几种： 1）freightTemplateId参数对应的运费模版不存在 2）非虚拟类目使用了虚拟类目的运费模版。 3）海外仓商品aeopAeProductSKUs参数中的aeopSKUProperty属性设置了skuPropertyId: 200007763)中的发布国与运费模版中的国家不一致。 4) 运费模版内容为空',
            '13001003' => 'freightTemplateId参数对应的运费模版中的内容有错误',
            '13002018' => 'aeopAeProductSKUs参数中的SKU个数大于256个',
            '13001022' => 'productPrice参数取值不在1-1000000之间',
            '13002006' => 'aeopAeProductSKUs参数中的aeopSKUProperty数组的长度大于3',
            '13002001' => 'aeopAeProductSKUs参数中的skuPrice属性的取值不在1-1000000之间',
            '13002013' => 'aeopAeProductSKUs参数中的skuPrice属性填写错误。出错原因有以下几种： 1）skuCode的长度超过了20个字符。 2）skuCode参数值中包含了空格、大于号和小于号、中文和全角字符',
            '13002015' => 'aeopAeProductSKUs参数中的ipmSkuStock属性取值不在0~999999之间',
            '13002002' => 'aeopAeProductSKUs参数填写有误。可能有以下几种情况： 1. aeopAeProductSKUs中同时存在默认SKU(aeopSKUProperty:[])以及自定义SKU。 2. SKU必填属性没填',
            '13002007' => 'aeopAeProductSKUs参数中的aeopSKUProperty属性中存在skuPropertyId:null的SKU',
            '13002008' => 'aeopAeProductSKUs参数中的aeopSKUProperty属性中存在propertyValueId:null的SKU',
            '13002009' => 'aeopAeProductSKUs参数中的aeopSKUProperty属性提供了propertyValueDefinitionName参数，但这一维SKU属性不允许自定义名称。请删除propertyValueDefinitionName参数',
            '13002010' => 'aeopAeProductSKUs参数中的aeopSKUProperty属性提供了skuImage参数，但这一维SKU属性不允许自定义图片。请删除skuImage参数',
            '13002011' => 'aeopAeProductSKUs参数中的aeopSKUProperty属性提供了skuImage参数有误。SKU图片必须满足以下要求： 1）图片的连接必须以http或者https开头,2）图片的格式必须是jpg后者jpeg。 3）图片必须存在',
		    '13002004' => 'aeopAeProductSKUs参数中的aeopSKUProperty属性中的propertyValueId不在类目规定的候选值列表中',
		    '13002003' => 'aeopAeProductSKUs参数中的aeopSKUProperty属性中的skuPropertyId不在类目规定的候选值列表中',
		    '13002005' => 'aeopAeProductSKUs参数中的aeopSKUProperty属性中的SKU顺序排列有误',
		    '13002014' => 'aeopAeProductSKUs参数中的aeopSKUProperty属性存在重复的SKU属性。',
            '13002016' => 'aeopAeProductSKUs参数中的aeopSKUProperty属性存在重复的SKU属性',
            '13002017' => 'aeopAeProductSKUs参数中的SKU个数与实际选择的属性积不一致。（笛卡尔集不一致）',
            '13001043' => '商品维度的总库存值不合法。即aeopAeProductSKUs参数中的ipmSkuStock之和不在1~999999之间',
            '13001034' => '卖家的图片银行空间已满。系统无法将详描中的图片保存到图片银行',
            '13001035' => '商品详描中的图片已经在图片银行中，无需重复上传。请直接引用图片银行中的图片即可',
            '13001036' => '商品详描中存在一些图片。这些图片在图片银行中已被卖家删除。请删除这些图片后重新发布',
            '13001037' => '商品详描中存在一些图片的大小超过了3M。导致无法上传到图片银行。请删除或者缩减这些图片的大小后再发布',
            '13001038' => '商品详描中存在一些图片是一些废图片(无法读取这些图片内容)。导致无法上传到图片银行。请删除这些图片后再发布',
            '13001039' => '系统上传图片到图片银行失败，导致商品发布失败,请联系技术支持，报告问题。',
            '13001040' => '系统上传图片到图片银行失败，导致商品发布失败,请联系技术支持，报告问题。',
            '13001041' => '系统上传图片到图片银行失败，导致商品发布失败,请联系技术支持，报告问题。',
            '13092001' => 'sizechartId参数必须是一个大于0的整数',
            '13099000' => 'sizechartId参数所指定的尺码模版不存在',
            '13092003' => 'sizechartId所指定的服务模版不属于当前卖家',
            '13092004' => 'sizechartId所指定的尺码模版无类目与之匹配',
            '13092005' => 'sizechartId所指定的尺码模版与categoryId参数所对应的服务模版不匹配，无法设置',
            '13092999' => '调用尺码模版接口超时。系统内部异常，请联系技术支持',
            '13005050' => '发布失败，可发布商品超过数量上限,请管理好自己要发布的商品总数。'
		);
		if (isset($errorArray[$erroCode])){
		    return $errorArray[$erroCode];
		} else {
		    return '未知错误，请联系技术！';
		}
	}
}