<?php

/**
 * Temboo PHP SDK Twitter classes
 *
 * Execute Choreographies from the Temboo Twitter bundle.
 *
 * PHP version 5
 *
 * LICENSE: Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @category   Services
 * @package    Temboo
 * @subpackage Twitter
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Retrieves the 20 most recent Tweets favorited by the authenticating or specified user.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Favorites_ListFavorites extends Temboo_Choreography
{
    /**
     * Retrieves the 20 most recent Tweets favorited by the authenticating or specified user.
     *
     * @param Temboo_Session $session The session that owns this ListFavorites Choreo.
     * @return Twitter_Favorites_ListFavorites New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Favorites/ListFavorites/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListFavorites Choreo.
     *
     * @param Twitter_Favorites_ListFavorites_Inputs|array $inputs (optional) Inputs as Twitter_Favorites_ListFavorites_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Favorites_ListFavorites_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Favorites_ListFavorites_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListFavorites Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Favorites_ListFavorites_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Favorites_ListFavorites_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListFavorites Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Favorites_ListFavorites_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListFavorites Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Favorites_ListFavorites_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListFavorites input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Favorites_ListFavorites_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Favorites_ListFavorites_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this ListFavorites Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Favorites_ListFavorites_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this ListFavorites Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Favorites_ListFavorites_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this ListFavorites Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Favorites_ListFavorites_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this ListFavorites Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Favorites_ListFavorites_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Count input for this ListFavorites Choreo.
     *
     * @param int $value (optional, integer) Specifies the number of records to retrieve. Must be less than or equal to 200. Defaults to 20.
     * @return Twitter_Favorites_ListFavorites_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this ListFavorites Choreo.
     *
     * @param bool $value (optional, boolean) The "entities" node containing extra metadata will not be included when set to false.
     * @return Twitter_Favorites_ListFavorites_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the MaxId input for this ListFavorites Choreo.
     *
     * @param string $value (optional, string) Returns results with an ID less than (older than) or equal to the specified ID.
     * @return Twitter_Favorites_ListFavorites_Inputs For method chaining.
     */
    public function setMaxId($value)
    {
        return $this->set('MaxId', $value);
    }

    /**
     * Set the value for the ScreenName input for this ListFavorites Choreo.
     *
     * @param string $value (optional, string) Screen name of the user to return results for. If ScreenName or UserId are not provided, the authenticating user is assumed.
     * @return Twitter_Favorites_ListFavorites_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the SinceId input for this ListFavorites Choreo.
     *
     * @param string $value (optional, string) Returns results with an ID greater than (more recent than) the specified ID.
     * @return Twitter_Favorites_ListFavorites_Inputs For method chaining.
     */
    public function setSinceId($value)
    {
        return $this->set('SinceId', $value);
    }

    /**
     * Set the value for the UserId input for this ListFavorites Choreo.
     *
     * @param string $value (optional, string) ID of the user to return results for. If ScreenName or UserId are not provided, the authenticating user is assumed.
     * @return Twitter_Favorites_ListFavorites_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the ListFavorites Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Favorites_ListFavorites_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListFavorites Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListFavorites execution.
     * @param Twitter_Favorites_ListFavorites $choreo The choreography object for this execution.
     * @param Twitter_Favorites_ListFavorites_Inputs|array $inputs (optional) Inputs as Twitter_Favorites_ListFavorites_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Favorites_ListFavorites_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Favorites_ListFavorites $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListFavorites execution.
     *
     * @return Twitter_Favorites_ListFavorites_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this ListFavorites execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Favorites_ListFavorites_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Favorites_ListFavorites_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListFavorites Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Favorites_ListFavorites_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListFavorites Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Favorites_ListFavorites_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this ListFavorites execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Response" output from this ListFavorites execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Remaining" output from this ListFavorites execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Reset" output from this ListFavorites execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
}

/**
 * Retrieves a collection of relevant Tweets matching a specified query.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Search_Tweets extends Temboo_Choreography
{
    /**
     * Retrieves a collection of relevant Tweets matching a specified query.
     *
     * @param Temboo_Session $session The session that owns this Tweets Choreo.
     * @return Twitter_Search_Tweets New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Search/Tweets/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Tweets Choreo.
     *
     * @param Twitter_Search_Tweets_Inputs|array $inputs (optional) Inputs as Twitter_Search_Tweets_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Search_Tweets_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Search_Tweets_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Tweets Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Search_Tweets_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Search_Tweets_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Tweets Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Search_Tweets_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Tweets Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Search_Tweets_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Tweets input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Search_Tweets_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Search_Tweets_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this Tweets Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Search_Tweets_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this Tweets Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Search_Tweets_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this Tweets Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Search_Tweets_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this Tweets Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Search_Tweets_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Count input for this Tweets Choreo.
     *
     * @param int $value (optional, integer) Specifies the number of records to retrieve. Must be less than or equal to 200. Defaults to 20.
     * @return Twitter_Search_Tweets_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the Geocode input for this Tweets Choreo.
     *
     * @param string $value (optional, string) Returns tweets by users located within a given radius of the given latitude/longitude. Formatted like: 37.781157,-122.398720,1mi.
     * @return Twitter_Search_Tweets_Inputs For method chaining.
     */
    public function setGeocode($value)
    {
        return $this->set('Geocode', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this Tweets Choreo.
     *
     * @param bool $value (optional, boolean) The "entities" node containing extra metadata will not be included when set to false.
     * @return Twitter_Search_Tweets_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the Language input for this Tweets Choreo.
     *
     * @param string $value (optional, string) Restricts tweets to the given language, given by an ISO 639-1 code.
     * @return Twitter_Search_Tweets_Inputs For method chaining.
     */
    public function setLanguage($value)
    {
        return $this->set('Language', $value);
    }

    /**
     * Set the value for the MaxId input for this Tweets Choreo.
     *
     * @param string $value (optional, string) Returns results with an ID less than (older than) or equal to the specified ID.
     * @return Twitter_Search_Tweets_Inputs For method chaining.
     */
    public function setMaxId($value)
    {
        return $this->set('MaxId', $value);
    }

    /**
     * Set the value for the Query input for this Tweets Choreo.
     *
     * @param string $value (required, string) A search query of up to 1,000 characters.
     * @return Twitter_Search_Tweets_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the ResultType input for this Tweets Choreo.
     *
     * @param string $value (optional, string) Specifies what type of search results you want to receive. The default is "mixed." Valid values are: mixed, recent, and popular.
     * @return Twitter_Search_Tweets_Inputs For method chaining.
     */
    public function setResultType($value)
    {
        return $this->set('ResultType', $value);
    }

    /**
     * Set the value for the SinceId input for this Tweets Choreo.
     *
     * @param string $value (optional, string) Returns results with an ID greater than (more recent than) the specified ID.
     * @return Twitter_Search_Tweets_Inputs For method chaining.
     */
    public function setSinceId($value)
    {
        return $this->set('SinceId', $value);
    }

    /**
     * Set the value for the Until input for this Tweets Choreo.
     *
     * @param string $value (optional, date) Returns tweets generated before the given date. Date should be formatted as YYYY-MM-DD.
     * @return Twitter_Search_Tweets_Inputs For method chaining.
     */
    public function setUntil($value)
    {
        return $this->set('Until', $value);
    }
}


/**
 * Execution object for the Tweets Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Search_Tweets_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Tweets Choreo.
     *
     * @param Temboo_Session $session The session that owns this Tweets execution.
     * @param Twitter_Search_Tweets $choreo The choreography object for this execution.
     * @param Twitter_Search_Tweets_Inputs|array $inputs (optional) Inputs as Twitter_Search_Tweets_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Search_Tweets_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Search_Tweets $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Tweets execution.
     *
     * @return Twitter_Search_Tweets_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Tweets execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Search_Tweets_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Search_Tweets_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Tweets Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Search_Tweets_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Tweets Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Search_Tweets_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Remaining" output from this Tweets execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Limit" output from this Tweets execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Reset" output from this Tweets execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
    /**
     * Retrieve the value for the "Response" output from this Tweets execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves settings for the authenticating user including trend, geo, and sleep time information.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_GetAccountSettings extends Temboo_Choreography
{
    /**
     * Retrieves settings for the authenticating user including trend, geo, and sleep time information.
     *
     * @param Temboo_Session $session The session that owns this GetAccountSettings Choreo.
     * @return Twitter_Users_GetAccountSettings New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Users/GetAccountSettings/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetAccountSettings Choreo.
     *
     * @param Twitter_Users_GetAccountSettings_Inputs|array $inputs (optional) Inputs as Twitter_Users_GetAccountSettings_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Users_GetAccountSettings_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Users_GetAccountSettings_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetAccountSettings Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Users_GetAccountSettings_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Users_GetAccountSettings_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetAccountSettings Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_GetAccountSettings_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetAccountSettings Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Users_GetAccountSettings_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetAccountSettings input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Users_GetAccountSettings_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Users_GetAccountSettings_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetAccountSettings Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Users_GetAccountSettings_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetAccountSettings Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Users_GetAccountSettings_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetAccountSettings Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Users_GetAccountSettings_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetAccountSettings Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Users_GetAccountSettings_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }
}


/**
 * Execution object for the GetAccountSettings Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_GetAccountSettings_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetAccountSettings Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetAccountSettings execution.
     * @param Twitter_Users_GetAccountSettings $choreo The choreography object for this execution.
     * @param Twitter_Users_GetAccountSettings_Inputs|array $inputs (optional) Inputs as Twitter_Users_GetAccountSettings_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Users_GetAccountSettings_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Users_GetAccountSettings $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetAccountSettings execution.
     *
     * @return Twitter_Users_GetAccountSettings_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetAccountSettings execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Users_GetAccountSettings_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Users_GetAccountSettings_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetAccountSettings Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_GetAccountSettings_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetAccountSettings Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Users_GetAccountSettings_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Remaining" output from this GetAccountSettings execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this GetAccountSettings execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Limit" output from this GetAccountSettings execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Reset" output from this GetAccountSettings execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
}

/**
 * Allows you to predict the rate limits available to your application by returning the limits for specified families of methods.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Help_GetRateLimitStatus extends Temboo_Choreography
{
    /**
     * Allows you to predict the rate limits available to your application by returning the limits for specified families of methods.
     *
     * @param Temboo_Session $session The session that owns this GetRateLimitStatus Choreo.
     * @return Twitter_Help_GetRateLimitStatus New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Help/GetRateLimitStatus/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetRateLimitStatus Choreo.
     *
     * @param Twitter_Help_GetRateLimitStatus_Inputs|array $inputs (optional) Inputs as Twitter_Help_GetRateLimitStatus_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Help_GetRateLimitStatus_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Help_GetRateLimitStatus_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetRateLimitStatus Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Help_GetRateLimitStatus_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Help_GetRateLimitStatus_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetRateLimitStatus Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Help_GetRateLimitStatus_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetRateLimitStatus Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Help_GetRateLimitStatus_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetRateLimitStatus input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Help_GetRateLimitStatus_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Help_GetRateLimitStatus_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetRateLimitStatus Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Help_GetRateLimitStatus_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetRateLimitStatus Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Help_GetRateLimitStatus_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetRateLimitStatus Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Help_GetRateLimitStatus_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetRateLimitStatus Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Help_GetRateLimitStatus_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Resources input for this GetRateLimitStatus Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of resources you want to know the current rate limit disposition for (e.g., statuses,friends,trends).
     * @return Twitter_Help_GetRateLimitStatus_Inputs For method chaining.
     */
    public function setResources($value)
    {
        return $this->set('Resources', $value);
    }
}


/**
 * Execution object for the GetRateLimitStatus Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Help_GetRateLimitStatus_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetRateLimitStatus Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetRateLimitStatus execution.
     * @param Twitter_Help_GetRateLimitStatus $choreo The choreography object for this execution.
     * @param Twitter_Help_GetRateLimitStatus_Inputs|array $inputs (optional) Inputs as Twitter_Help_GetRateLimitStatus_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Help_GetRateLimitStatus_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Help_GetRateLimitStatus $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetRateLimitStatus execution.
     *
     * @return Twitter_Help_GetRateLimitStatus_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetRateLimitStatus execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Help_GetRateLimitStatus_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Help_GetRateLimitStatus_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetRateLimitStatus Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Help_GetRateLimitStatus_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetRateLimitStatus Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Help_GetRateLimitStatus_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this GetRateLimitStatus execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Reset" output from this GetRateLimitStatus execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
    /**
     * Retrieve the value for the "Remaining" output from this GetRateLimitStatus execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this GetRateLimitStatus execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Verifies that the specified user is a member of the specified list.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_ShowMember extends Temboo_Choreography
{
    /**
     * Verifies that the specified user is a member of the specified list.
     *
     * @param Temboo_Session $session The session that owns this ShowMember Choreo.
     * @return Twitter_Lists_ShowMember New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Lists/ShowMember/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ShowMember Choreo.
     *
     * @param Twitter_Lists_ShowMember_Inputs|array $inputs (optional) Inputs as Twitter_Lists_ShowMember_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Lists_ShowMember_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Lists_ShowMember_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ShowMember Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Lists_ShowMember_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Lists_ShowMember_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ShowMember Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_ShowMember_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ShowMember Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Lists_ShowMember_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ShowMember input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Lists_ShowMember_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Lists_ShowMember_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this ShowMember Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Lists_ShowMember_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this ShowMember Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Lists_ShowMember_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this ShowMember Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Lists_ShowMember_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this ShowMember Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Lists_ShowMember_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this ShowMember Choreo.
     *
     * @param bool $value (optional, boolean) The "entities" node containing extra metadata will not be included when set to false.
     * @return Twitter_Lists_ShowMember_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the ListId input for this ShowMember Choreo.
     *
     * @param string $value (conditional, string) The numerical ID of the list. Required unless Slug is provided.
     * @return Twitter_Lists_ShowMember_Inputs For method chaining.
     */
    public function setListId($value)
    {
        return $this->set('ListId', $value);
    }

    /**
     * Set the value for the OwnerId input for this ShowMember Choreo.
     *
     * @param string $value (optional, string) The user ID of the user who owns the list being requested by a slug.
     * @return Twitter_Lists_ShowMember_Inputs For method chaining.
     */
    public function setOwnerId($value)
    {
        return $this->set('OwnerId', $value);
    }

    /**
     * Set the value for the OwnerScreenName input for this ShowMember Choreo.
     *
     * @param string $value (optional, string) The screen name of the user who owns the list being requested by a slug.
     * @return Twitter_Lists_ShowMember_Inputs For method chaining.
     */
    public function setOwnerScreenName($value)
    {
        return $this->set('OwnerScreenName', $value);
    }

    /**
     * Set the value for the ScreenName input for this ShowMember Choreo.
     *
     * @param string $value (conditional, string) The screen name of the user to retrieve from the list. Required unless providing the UserId.
     * @return Twitter_Lists_ShowMember_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the SkipStatus input for this ShowMember Choreo.
     *
     * @param bool $value (optional, boolean) When set to either true, statuses will not be included in the returned user objects.
     * @return Twitter_Lists_ShowMember_Inputs For method chaining.
     */
    public function setSkipStatus($value)
    {
        return $this->set('SkipStatus', $value);
    }

    /**
     * Set the value for the Slug input for this ShowMember Choreo.
     *
     * @param string $value (optional, string) When identifying a list by a slug, either OwnerScreenName or OwnerId must be provided.
     * @return Twitter_Lists_ShowMember_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }

    /**
     * Set the value for the UserId input for this ShowMember Choreo.
     *
     * @param string $value (conditional, string) The ID of the user to retrieve from the list. Required unless providing the ScreenName.
     * @return Twitter_Lists_ShowMember_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the ShowMember Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_ShowMember_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ShowMember Choreo.
     *
     * @param Temboo_Session $session The session that owns this ShowMember execution.
     * @param Twitter_Lists_ShowMember $choreo The choreography object for this execution.
     * @param Twitter_Lists_ShowMember_Inputs|array $inputs (optional) Inputs as Twitter_Lists_ShowMember_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Lists_ShowMember_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Lists_ShowMember $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ShowMember execution.
     *
     * @return Twitter_Lists_ShowMember_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this ShowMember execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Lists_ShowMember_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Lists_ShowMember_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ShowMember Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_ShowMember_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ShowMember Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Lists_ShowMember_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Reset" output from this ShowMember execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
    /**
     * Retrieve the value for the "Limit" output from this ShowMember execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Response" output from this ShowMember execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Remaining" output from this ShowMember execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Retrieves the 20 most recent mentions for the authenticating user.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_Mentions extends Temboo_Choreography
{
    /**
     * Retrieves the 20 most recent mentions for the authenticating user.
     *
     * @param Temboo_Session $session The session that owns this Mentions Choreo.
     * @return Twitter_Timelines_Mentions New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Timelines/Mentions/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Mentions Choreo.
     *
     * @param Twitter_Timelines_Mentions_Inputs|array $inputs (optional) Inputs as Twitter_Timelines_Mentions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Timelines_Mentions_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Timelines_Mentions_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Mentions Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Timelines_Mentions_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Timelines_Mentions_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Mentions Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_Mentions_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Mentions Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Timelines_Mentions_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Mentions input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Timelines_Mentions_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Timelines_Mentions_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this Mentions Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.n
     * @return Twitter_Timelines_Mentions_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this Mentions Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Timelines_Mentions_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this Mentions Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Timelines_Mentions_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this Mentions Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Timelines_Mentions_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ContributorDetails input for this Mentions Choreo.
     *
     * @param bool $value (optional, boolean) Set to true to include the screen_name of the contributor. By default only the user_id of the contributor is included.
     * @return Twitter_Timelines_Mentions_Inputs For method chaining.
     */
    public function setContributorDetails($value)
    {
        return $this->set('ContributorDetails', $value);
    }

    /**
     * Set the value for the Count input for this Mentions Choreo.
     *
     * @param int $value (optional, integer) Specifies the number of tweets to retrieve. Must be less than or equal to 200. Defaults to 20.
     * @return Twitter_Timelines_Mentions_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this Mentions Choreo.
     *
     * @param bool $value (optional, boolean) The "entities" node containing extra metadata will not be included when set to false.
     * @return Twitter_Timelines_Mentions_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the MaxId input for this Mentions Choreo.
     *
     * @param string $value (optional, string) Returns results with an ID less than (older than) or equal to the specified ID.
     * @return Twitter_Timelines_Mentions_Inputs For method chaining.
     */
    public function setMaxId($value)
    {
        return $this->set('MaxId', $value);
    }

    /**
     * Set the value for the SinceId input for this Mentions Choreo.
     *
     * @param string $value (optional, string) Returns results with an ID greater than (more recent than) the specified ID.
     * @return Twitter_Timelines_Mentions_Inputs For method chaining.
     */
    public function setSinceId($value)
    {
        return $this->set('SinceId', $value);
    }

    /**
     * Set the value for the TrimUser input for this Mentions Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, each tweet returned in a timeline will include a user object including only the status authors numerical ID. Defaults to false, which returns the complete user object.
     * @return Twitter_Timelines_Mentions_Inputs For method chaining.
     */
    public function setTrimUser($value)
    {
        return $this->set('TrimUser', $value);
    }
}


/**
 * Execution object for the Mentions Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_Mentions_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Mentions Choreo.
     *
     * @param Temboo_Session $session The session that owns this Mentions execution.
     * @param Twitter_Timelines_Mentions $choreo The choreography object for this execution.
     * @param Twitter_Timelines_Mentions_Inputs|array $inputs (optional) Inputs as Twitter_Timelines_Mentions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Timelines_Mentions_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Timelines_Mentions $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Mentions execution.
     *
     * @return Twitter_Timelines_Mentions_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Mentions execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Timelines_Mentions_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Timelines_Mentions_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Mentions Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_Mentions_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Mentions Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Timelines_Mentions_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Reset" output from this Mentions execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
    /**
     * Retrieve the value for the "Limit" output from this Mentions execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this Mentions execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this Mentions execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to test if supplied user credentials are valid.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_VerifyCredentials extends Temboo_Choreography
{
    /**
     * Allows you to test if supplied user credentials are valid.
     *
     * @param Temboo_Session $session The session that owns this VerifyCredentials Choreo.
     * @return Twitter_Users_VerifyCredentials New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Users/VerifyCredentials/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this VerifyCredentials Choreo.
     *
     * @param Twitter_Users_VerifyCredentials_Inputs|array $inputs (optional) Inputs as Twitter_Users_VerifyCredentials_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Users_VerifyCredentials_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Users_VerifyCredentials_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this VerifyCredentials Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Users_VerifyCredentials_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Users_VerifyCredentials_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the VerifyCredentials Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_VerifyCredentials_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the VerifyCredentials Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Users_VerifyCredentials_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this VerifyCredentials input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Users_VerifyCredentials_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Users_VerifyCredentials_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this VerifyCredentials Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Users_VerifyCredentials_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this VerifyCredentials Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Users_VerifyCredentials_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this VerifyCredentials Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Users_VerifyCredentials_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this VerifyCredentials Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Users_VerifyCredentials_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the IncludeUserEntities input for this VerifyCredentials Choreo.
     *
     * @param bool $value (optional, boolean) The user "entities" node containing extra metadata will not be included when set to false.
     * @return Twitter_Users_VerifyCredentials_Inputs For method chaining.
     */
    public function setIncludeUserEntities($value)
    {
        return $this->set('IncludeUserEntities', $value);
    }

    /**
     * Set the value for the SkipStatus input for this VerifyCredentials Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, statuses will not be included in the returned user objects.
     * @return Twitter_Users_VerifyCredentials_Inputs For method chaining.
     */
    public function setSkipStatus($value)
    {
        return $this->set('SkipStatus', $value);
    }
}


/**
 * Execution object for the VerifyCredentials Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_VerifyCredentials_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the VerifyCredentials Choreo.
     *
     * @param Temboo_Session $session The session that owns this VerifyCredentials execution.
     * @param Twitter_Users_VerifyCredentials $choreo The choreography object for this execution.
     * @param Twitter_Users_VerifyCredentials_Inputs|array $inputs (optional) Inputs as Twitter_Users_VerifyCredentials_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Users_VerifyCredentials_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Users_VerifyCredentials $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this VerifyCredentials execution.
     *
     * @return Twitter_Users_VerifyCredentials_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this VerifyCredentials execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Users_VerifyCredentials_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Users_VerifyCredentials_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the VerifyCredentials Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_VerifyCredentials_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the VerifyCredentials Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Users_VerifyCredentials_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this VerifyCredentials execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Reset" output from this VerifyCredentials execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
    /**
     * Retrieve the value for the "Limit" output from this VerifyCredentials execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this VerifyCredentials execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Retrieves the specified list.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_ShowList extends Temboo_Choreography
{
    /**
     * Retrieves the specified list.
     *
     * @param Temboo_Session $session The session that owns this ShowList Choreo.
     * @return Twitter_Lists_ShowList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Lists/ShowList/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ShowList Choreo.
     *
     * @param Twitter_Lists_ShowList_Inputs|array $inputs (optional) Inputs as Twitter_Lists_ShowList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Lists_ShowList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Lists_ShowList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ShowList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Lists_ShowList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Lists_ShowList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ShowList Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_ShowList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ShowList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Lists_ShowList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ShowList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Lists_ShowList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Lists_ShowList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this ShowList Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Lists_ShowList_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this ShowList Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Lists_ShowList_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this ShowList Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Lists_ShowList_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this ShowList Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Lists_ShowList_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ListId input for this ShowList Choreo.
     *
     * @param string $value (conditional, string) The numerical ID of the list. Required unless Slug is provided.
     * @return Twitter_Lists_ShowList_Inputs For method chaining.
     */
    public function setListId($value)
    {
        return $this->set('ListId', $value);
    }

    /**
     * Set the value for the OwnerId input for this ShowList Choreo.
     *
     * @param string $value (optional, string) The user ID of the user who owns the list being requested by a slug.
     * @return Twitter_Lists_ShowList_Inputs For method chaining.
     */
    public function setOwnerId($value)
    {
        return $this->set('OwnerId', $value);
    }

    /**
     * Set the value for the OwnerScreenName input for this ShowList Choreo.
     *
     * @param string $value (optional, string) The screen name of the user who owns the list being requested by a slug.
     * @return Twitter_Lists_ShowList_Inputs For method chaining.
     */
    public function setOwnerScreenName($value)
    {
        return $this->set('OwnerScreenName', $value);
    }

    /**
     * Set the value for the Slug input for this ShowList Choreo.
     *
     * @param string $value (optional, string) When identifying a list by a slug, either OwnerScreenName or OwnerId must be provided.
     * @return Twitter_Lists_ShowList_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }
}


/**
 * Execution object for the ShowList Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_ShowList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ShowList Choreo.
     *
     * @param Temboo_Session $session The session that owns this ShowList execution.
     * @param Twitter_Lists_ShowList $choreo The choreography object for this execution.
     * @param Twitter_Lists_ShowList_Inputs|array $inputs (optional) Inputs as Twitter_Lists_ShowList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Lists_ShowList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Lists_ShowList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ShowList execution.
     *
     * @return Twitter_Lists_ShowList_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this ShowList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Lists_ShowList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Lists_ShowList_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ShowList Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_ShowList_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ShowList Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Lists_ShowList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ShowList execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Reset" output from this ShowList execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
    /**
     * Retrieve the value for the "Limit" output from this ShowList execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this ShowList execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Deletes a specified status.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_StatusesDestroy extends Temboo_Choreography
{
    /**
     * Deletes a specified status.
     *
     * @param Temboo_Session $session The session that owns this StatusesDestroy Choreo.
     * @return Twitter_Tweets_StatusesDestroy New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Tweets/StatusesDestroy/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this StatusesDestroy Choreo.
     *
     * @param Twitter_Tweets_StatusesDestroy_Inputs|array $inputs (optional) Inputs as Twitter_Tweets_StatusesDestroy_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Tweets_StatusesDestroy_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Tweets_StatusesDestroy_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this StatusesDestroy Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Tweets_StatusesDestroy_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Tweets_StatusesDestroy_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the StatusesDestroy Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_StatusesDestroy_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the StatusesDestroy Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Tweets_StatusesDestroy_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this StatusesDestroy input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Tweets_StatusesDestroy_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Tweets_StatusesDestroy_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this StatusesDestroy Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Tweets_StatusesDestroy_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this StatusesDestroy Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Tweets_StatusesDestroy_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this StatusesDestroy Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Tweets_StatusesDestroy_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this StatusesDestroy Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Tweets_StatusesDestroy_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ID input for this StatusesDestroy Choreo.
     *
     * @param string $value (required, string) The numerical ID of the status to delete.
     * @return Twitter_Tweets_StatusesDestroy_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the TrimUser input for this StatusesDestroy Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, each tweet returned in a timeline will include a user object including only the status authors numerical ID.
     * @return Twitter_Tweets_StatusesDestroy_Inputs For method chaining.
     */
    public function setTrimUser($value)
    {
        return $this->set('TrimUser', $value);
    }
}


/**
 * Execution object for the StatusesDestroy Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_StatusesDestroy_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the StatusesDestroy Choreo.
     *
     * @param Temboo_Session $session The session that owns this StatusesDestroy execution.
     * @param Twitter_Tweets_StatusesDestroy $choreo The choreography object for this execution.
     * @param Twitter_Tweets_StatusesDestroy_Inputs|array $inputs (optional) Inputs as Twitter_Tweets_StatusesDestroy_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Tweets_StatusesDestroy_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Tweets_StatusesDestroy $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this StatusesDestroy execution.
     *
     * @return Twitter_Tweets_StatusesDestroy_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this StatusesDestroy execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Tweets_StatusesDestroy_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Tweets_StatusesDestroy_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the StatusesDestroy Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_StatusesDestroy_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the StatusesDestroy Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Tweets_StatusesDestroy_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this StatusesDestroy execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to follow another Twitter user by specifying a Twitter user id or screen name.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_CreateFriendship extends Temboo_Choreography
{
    /**
     * Allows you to follow another Twitter user by specifying a Twitter user id or screen name.
     *
     * @param Temboo_Session $session The session that owns this CreateFriendship Choreo.
     * @return Twitter_FriendsAndFollowers_CreateFriendship New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/FriendsAndFollowers/CreateFriendship/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateFriendship Choreo.
     *
     * @param Twitter_FriendsAndFollowers_CreateFriendship_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_CreateFriendship_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_FriendsAndFollowers_CreateFriendship_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateFriendship Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_FriendsAndFollowers_CreateFriendship_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateFriendship Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_CreateFriendship_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateFriendship Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateFriendship input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this CreateFriendship Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this CreateFriendship Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this CreateFriendship Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this CreateFriendship Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Follow input for this CreateFriendship Choreo.
     *
     * @param bool $value (optional, boolean) A boolean flag that enables notifications for the target user when set to true.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Inputs For method chaining.
     */
    public function setFollow($value)
    {
        return $this->set('Follow', $value);
    }

    /**
     * Set the value for the ScreenName input for this CreateFriendship Choreo.
     *
     * @param string $value (conditional, string) The screen name for the friend you want to create a friendship with. Required if UserId isn't specified.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the UserId input for this CreateFriendship Choreo.
     *
     * @param string $value (conditional, string) The user id for the friend you want to create a friendship with. Required if ScreenName isn't specified.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the CreateFriendship Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_CreateFriendship_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateFriendship Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateFriendship execution.
     * @param Twitter_FriendsAndFollowers_CreateFriendship $choreo The choreography object for this execution.
     * @param Twitter_FriendsAndFollowers_CreateFriendship_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_CreateFriendship_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_FriendsAndFollowers_CreateFriendship $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateFriendship execution.
     *
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this CreateFriendship execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_FriendsAndFollowers_CreateFriendship_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateFriendship Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_CreateFriendship_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateFriendship Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateFriendship execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the lists that the specified user has been added to.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_GetMemberships extends Temboo_Choreography
{
    /**
     * Retrieves the lists that the specified user has been added to.
     *
     * @param Temboo_Session $session The session that owns this GetMemberships Choreo.
     * @return Twitter_Lists_GetMemberships New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Lists/GetMemberships/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetMemberships Choreo.
     *
     * @param Twitter_Lists_GetMemberships_Inputs|array $inputs (optional) Inputs as Twitter_Lists_GetMemberships_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Lists_GetMemberships_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Lists_GetMemberships_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetMemberships Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Lists_GetMemberships_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Lists_GetMemberships_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetMemberships Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_GetMemberships_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetMemberships Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Lists_GetMemberships_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetMemberships input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Lists_GetMemberships_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Lists_GetMemberships_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetMemberships Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Lists_GetMemberships_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetMemberships Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Lists_GetMemberships_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetMemberships Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Lists_GetMemberships_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetMemberships Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Lists_GetMemberships_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Cursor input for this GetMemberships Choreo.
     *
     * @param string $value (optional, string) Allows you to pass in the previous_cursor or next_cursor in order to page through results.
     * @return Twitter_Lists_GetMemberships_Inputs For method chaining.
     */
    public function setCursor($value)
    {
        return $this->set('Cursor', $value);
    }

    /**
     * Set the value for the FilterToOwnedLists input for this GetMemberships Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, the response includes only lists that the authenticating user owns and lists that the specified user is a member of.
     * @return Twitter_Lists_GetMemberships_Inputs For method chaining.
     */
    public function setFilterToOwnedLists($value)
    {
        return $this->set('FilterToOwnedLists', $value);
    }

    /**
     * Set the value for the ScreenName input for this GetMemberships Choreo.
     *
     * @param string $value (conditional, string) The screen name of the user for whom to return results for. If not provided, the memberships for the authenticating user are returned.
     * @return Twitter_Lists_GetMemberships_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the UserId input for this GetMemberships Choreo.
     *
     * @param string $value (conditional, string) The ID of the user for whom to return results for. If not provided, the memberships for the authenticating user are returned.
     * @return Twitter_Lists_GetMemberships_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the GetMemberships Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_GetMemberships_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetMemberships Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetMemberships execution.
     * @param Twitter_Lists_GetMemberships $choreo The choreography object for this execution.
     * @param Twitter_Lists_GetMemberships_Inputs|array $inputs (optional) Inputs as Twitter_Lists_GetMemberships_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Lists_GetMemberships_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Lists_GetMemberships $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetMemberships execution.
     *
     * @return Twitter_Lists_GetMemberships_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetMemberships execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Lists_GetMemberships_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Lists_GetMemberships_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetMemberships Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_GetMemberships_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetMemberships Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Lists_GetMemberships_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this GetMemberships execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Response" output from this GetMemberships execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Reset" output from this GetMemberships execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
    /**
     * Retrieve the value for the "Remaining" output from this GetMemberships execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Updates an existing list.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_UpdateList extends Temboo_Choreography
{
    /**
     * Updates an existing list.
     *
     * @param Temboo_Session $session The session that owns this UpdateList Choreo.
     * @return Twitter_Lists_UpdateList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Lists/UpdateList/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateList Choreo.
     *
     * @param Twitter_Lists_UpdateList_Inputs|array $inputs (optional) Inputs as Twitter_Lists_UpdateList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Lists_UpdateList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Lists_UpdateList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Lists_UpdateList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Lists_UpdateList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateList Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_UpdateList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Lists_UpdateList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Lists_UpdateList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Lists_UpdateList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this UpdateList Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Lists_UpdateList_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this UpdateList Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Lists_UpdateList_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this UpdateList Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Lists_UpdateList_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this UpdateList Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Lists_UpdateList_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Description input for this UpdateList Choreo.
     *
     * @param string $value (optional, string) A description of the list.
     * @return Twitter_Lists_UpdateList_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the ListId input for this UpdateList Choreo.
     *
     * @param string $value (conditional, string) The numerical ID of the list. Required unless Slug is provided.
     * @return Twitter_Lists_UpdateList_Inputs For method chaining.
     */
    public function setListId($value)
    {
        return $this->set('ListId', $value);
    }

    /**
     * Set the value for the Mode input for this UpdateList Choreo.
     *
     * @param string $value (optional, string) Indicates if this list is "public" (the default) or "private".
     * @return Twitter_Lists_UpdateList_Inputs For method chaining.
     */
    public function setMode($value)
    {
        return $this->set('Mode', $value);
    }

    /**
     * Set the value for the Name input for this UpdateList Choreo.
     *
     * @param string $value (optional, string) The name of the new list.
     * @return Twitter_Lists_UpdateList_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the OwnerId input for this UpdateList Choreo.
     *
     * @param string $value (optional, string) The user ID of the user who owns the list being requested by a slug.
     * @return Twitter_Lists_UpdateList_Inputs For method chaining.
     */
    public function setOwnerId($value)
    {
        return $this->set('OwnerId', $value);
    }

    /**
     * Set the value for the OwnerScreenName input for this UpdateList Choreo.
     *
     * @param string $value (optional, string) The screen name of the user who owns the list being requested by a slug.
     * @return Twitter_Lists_UpdateList_Inputs For method chaining.
     */
    public function setOwnerScreenName($value)
    {
        return $this->set('OwnerScreenName', $value);
    }

    /**
     * Set the value for the Slug input for this UpdateList Choreo.
     *
     * @param string $value (optional, string) When identifying a list by a slug, either OwnerScreenName or OwnerId must be provided.
     * @return Twitter_Lists_UpdateList_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }
}


/**
 * Execution object for the UpdateList Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_UpdateList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateList Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateList execution.
     * @param Twitter_Lists_UpdateList $choreo The choreography object for this execution.
     * @param Twitter_Lists_UpdateList_Inputs|array $inputs (optional) Inputs as Twitter_Lists_UpdateList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Lists_UpdateList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Lists_UpdateList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateList execution.
     *
     * @return Twitter_Lists_UpdateList_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this UpdateList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Lists_UpdateList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Lists_UpdateList_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateList Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_UpdateList_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateList Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Lists_UpdateList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateList execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of numeric IDs for every protected user for whom the authenticating user has a pending follow request.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_OutgoingFriendships extends Temboo_Choreography
{
    /**
     * Retrieves a list of numeric IDs for every protected user for whom the authenticating user has a pending follow request.
     *
     * @param Temboo_Session $session The session that owns this OutgoingFriendships Choreo.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/FriendsAndFollowers/OutgoingFriendships/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this OutgoingFriendships Choreo.
     *
     * @param Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_FriendsAndFollowers_OutgoingFriendships_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this OutgoingFriendships Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the OutgoingFriendships Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the OutgoingFriendships Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this OutgoingFriendships input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this OutgoingFriendships Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this OutgoingFriendships Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this OutgoingFriendships Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this OutgoingFriendships Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Cursor input for this OutgoingFriendships Choreo.
     *
     * @param int $value (optional, integer) Allows you to pass in the previous_cursor or next_cursor in order to page through results.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs For method chaining.
     */
    public function setCursor($value)
    {
        return $this->set('Cursor', $value);
    }

    /**
     * Set the value for the StringifyIDs input for this OutgoingFriendships Choreo.
     *
     * @param bool $value (optional, boolean) A boolean flag indicating that Tweet IDs should be returned as strings.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs For method chaining.
     */
    public function setStringifyIDs($value)
    {
        return $this->set('StringifyIDs', $value);
    }
}


/**
 * Execution object for the OutgoingFriendships Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_OutgoingFriendships_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the OutgoingFriendships Choreo.
     *
     * @param Temboo_Session $session The session that owns this OutgoingFriendships execution.
     * @param Twitter_FriendsAndFollowers_OutgoingFriendships $choreo The choreography object for this execution.
     * @param Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_FriendsAndFollowers_OutgoingFriendships $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this OutgoingFriendships execution.
     *
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this OutgoingFriendships execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_FriendsAndFollowers_OutgoingFriendships_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the OutgoingFriendships Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_OutgoingFriendships_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the OutgoingFriendships Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this OutgoingFriendships execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Response" output from this OutgoingFriendships execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Reset" output from this OutgoingFriendships execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
    /**
     * Retrieve the value for the "Remaining" output from this OutgoingFriendships execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Retrieves a list of numeric IDs for every user following the specified user.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_GetFollowersByID extends Temboo_Choreography
{
    /**
     * Retrieves a list of numeric IDs for every user following the specified user.
     *
     * @param Temboo_Session $session The session that owns this GetFollowersByID Choreo.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/FriendsAndFollowers/GetFollowersByID/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetFollowersByID Choreo.
     *
     * @param Twitter_FriendsAndFollowers_GetFollowersByID_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_GetFollowersByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_FriendsAndFollowers_GetFollowersByID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetFollowersByID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_FriendsAndFollowers_GetFollowersByID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetFollowersByID Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_GetFollowersByID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetFollowersByID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetFollowersByID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetFollowersByID Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetFollowersByID Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetFollowersByID Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetFollowersByID Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Cursor input for this GetFollowersByID Choreo.
     *
     * @param string $value (optional, string) Allows you to pass in the previous_cursor or next_cursor in order to page through results.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Inputs For method chaining.
     */
    public function setCursor($value)
    {
        return $this->set('Cursor', $value);
    }

    /**
     * Set the value for the ScreenName input for this GetFollowersByID Choreo.
     *
     * @param string $value (conditional, string) The screen name of the user for whom to return results for. Required if UserID isn't specified.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the StringifyIDs input for this GetFollowersByID Choreo.
     *
     * @param bool $value (optional, boolean) A boolean flag indicating that Tweet IDs should be returned as strings.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Inputs For method chaining.
     */
    public function setStringifyIDs($value)
    {
        return $this->set('StringifyIDs', $value);
    }

    /**
     * Set the value for the UserID input for this GetFollowersByID Choreo.
     *
     * @param int $value (conditional, integer) The ID of the user for whom to return results for. Required if ScreenName isn't specified.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetFollowersByID Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_GetFollowersByID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetFollowersByID Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetFollowersByID execution.
     * @param Twitter_FriendsAndFollowers_GetFollowersByID $choreo The choreography object for this execution.
     * @param Twitter_FriendsAndFollowers_GetFollowersByID_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_GetFollowersByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_FriendsAndFollowers_GetFollowersByID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetFollowersByID execution.
     *
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetFollowersByID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_FriendsAndFollowers_GetFollowersByID_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetFollowersByID Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_GetFollowersByID_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetFollowersByID Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetFollowersByID execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Given a latitude and a longitude coordinates, returns up to 20 places that can be used as a Place ID when updating a status.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_ReverseGeocode extends Temboo_Choreography
{
    /**
     * Given a latitude and a longitude coordinates, returns up to 20 places that can be used as a Place ID when updating a status.
     *
     * @param Temboo_Session $session The session that owns this ReverseGeocode Choreo.
     * @return Twitter_PlacesAndGeo_ReverseGeocode New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/PlacesAndGeo/ReverseGeocode/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ReverseGeocode Choreo.
     *
     * @param Twitter_PlacesAndGeo_ReverseGeocode_Inputs|array $inputs (optional) Inputs as Twitter_PlacesAndGeo_ReverseGeocode_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_PlacesAndGeo_ReverseGeocode_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ReverseGeocode Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_PlacesAndGeo_ReverseGeocode_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ReverseGeocode Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_ReverseGeocode_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ReverseGeocode Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ReverseGeocode input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this ReverseGeocode Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this ReverseGeocode Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Accuracy input for this ReverseGeocode Choreo.
     *
     * @param string $value (optional, string) A hint on the "region" in which to search. If a number, then this is a radius in meters. You can also specify feet by using the ft suffix (i.e. 5ft).
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Inputs For method chaining.
     */
    public function setAccuracy($value)
    {
        return $this->set('Accuracy', $value);
    }

    /**
     * Set the value for the Callback input for this ReverseGeocode Choreo.
     *
     * @param string $value (optional, string) If supplied, the response will use the JSONP format with a callback of the given name.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Inputs For method chaining.
     */
    public function setCallback($value)
    {
        return $this->set('Callback', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this ReverseGeocode Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this ReverseGeocode Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Granularity input for this ReverseGeocode Choreo.
     *
     * @param string $value (optional, string) This is the minimal granularity of place types to return and must be one of: poi, neighborhood, city, admin or country. Defaults to neighborhood.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Inputs For method chaining.
     */
    public function setGranularity($value)
    {
        return $this->set('Granularity', $value);
    }

    /**
     * Set the value for the Latitude input for this ReverseGeocode Choreo.
     *
     * @param float $value (required, decimal) The latitude to search around.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this ReverseGeocode Choreo.
     *
     * @param float $value (required, decimal) The longitude to search around.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the MaxResults input for this ReverseGeocode Choreo.
     *
     * @param int $value (optional, integer) The maximum number of results to return.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }
}


/**
 * Execution object for the ReverseGeocode Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_ReverseGeocode_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ReverseGeocode Choreo.
     *
     * @param Temboo_Session $session The session that owns this ReverseGeocode execution.
     * @param Twitter_PlacesAndGeo_ReverseGeocode $choreo The choreography object for this execution.
     * @param Twitter_PlacesAndGeo_ReverseGeocode_Inputs|array $inputs (optional) Inputs as Twitter_PlacesAndGeo_ReverseGeocode_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_PlacesAndGeo_ReverseGeocode $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ReverseGeocode execution.
     *
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this ReverseGeocode execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_PlacesAndGeo_ReverseGeocode_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ReverseGeocode Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_ReverseGeocode_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ReverseGeocode Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ReverseGeocode execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Remaining" output from this ReverseGeocode execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Limit" output from this ReverseGeocode execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Reset" output from this ReverseGeocode execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
}

/**
 * Searches for places that can be attached to a status update using a latitude and a longitude pair, an IP address, or a name.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_GeoSearch extends Temboo_Choreography
{
    /**
     * Searches for places that can be attached to a status update using a latitude and a longitude pair, an IP address, or a name.
     *
     * @param Temboo_Session $session The session that owns this GeoSearch Choreo.
     * @return Twitter_PlacesAndGeo_GeoSearch New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/PlacesAndGeo/GeoSearch/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GeoSearch Choreo.
     *
     * @param Twitter_PlacesAndGeo_GeoSearch_Inputs|array $inputs (optional) Inputs as Twitter_PlacesAndGeo_GeoSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_PlacesAndGeo_GeoSearch_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_PlacesAndGeo_GeoSearch_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GeoSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_PlacesAndGeo_GeoSearch_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GeoSearch Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_GeoSearch_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GeoSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GeoSearch input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GeoSearch Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GeoSearch Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Accuracy input for this GeoSearch Choreo.
     *
     * @param string $value (optional, string) A hint on the "region" in which to search. If a number, then this is a radius in meters. You can also specify feet by using the ft suffix (i.e. 5ft).
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function setAccuracy($value)
    {
        return $this->set('Accuracy', $value);
    }

    /**
     * Set the value for the Callback input for this GeoSearch Choreo.
     *
     * @param string $value (optional, string) If supplied, the response will use the JSONP format with a callback of the given name.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function setCallback($value)
    {
        return $this->set('Callback', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GeoSearch Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GeoSearch Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ContainedWithin input for this GeoSearch Choreo.
     *
     * @param string $value (optional, string) This is the place_id which you would like to restrict the search results to. This id can be retrieved with the GetPlaceInformation Choreo.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function setContainedWithin($value)
    {
        return $this->set('ContainedWithin', $value);
    }

    /**
     * Set the value for the Granularity input for this GeoSearch Choreo.
     *
     * @param string $value (optional, string) This is the minimal granularity of place types to return and must be one of: poi, neighborhood, city, admin or country. Defaults to neighborhood.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function setGranularity($value)
    {
        return $this->set('Granularity', $value);
    }

    /**
     * Set the value for the IP input for this GeoSearch Choreo.
     *
     * @param string $value (conditional, string) An IP address. Used when attempting to fix geolocation based off of the user's IP address. You must provide Latitude and Longitude, IP, or Query.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function setIP($value)
    {
        return $this->set('IP', $value);
    }

    /**
     * Set the value for the Latitude input for this GeoSearch Choreo.
     *
     * @param float $value (conditional, decimal) The latitude to search around. You must provide Latitude and Longitude, IP, or Query.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this GeoSearch Choreo.
     *
     * @param float $value (conditional, decimal) The longitude to search around. You must provide Latitude and Longitude, IP, or Query.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the MaxResults input for this GeoSearch Choreo.
     *
     * @param int $value (optional, integer) The maximum number of results to return.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the Query input for this GeoSearch Choreo.
     *
     * @param string $value (conditional, string) Free-form text to match against while executing a geo-based query. You must provide Latitude and Longitude, IP, or Query.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }
}


/**
 * Execution object for the GeoSearch Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_GeoSearch_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GeoSearch Choreo.
     *
     * @param Temboo_Session $session The session that owns this GeoSearch execution.
     * @param Twitter_PlacesAndGeo_GeoSearch $choreo The choreography object for this execution.
     * @param Twitter_PlacesAndGeo_GeoSearch_Inputs|array $inputs (optional) Inputs as Twitter_PlacesAndGeo_GeoSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_PlacesAndGeo_GeoSearch_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_PlacesAndGeo_GeoSearch $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GeoSearch execution.
     *
     * @return Twitter_PlacesAndGeo_GeoSearch_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GeoSearch execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_PlacesAndGeo_GeoSearch_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_PlacesAndGeo_GeoSearch_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GeoSearch Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_GeoSearch_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GeoSearch Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_PlacesAndGeo_GeoSearch_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this GeoSearch execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Response" output from this GeoSearch execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Reset" output from this GeoSearch execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
    /**
     * Retrieve the value for the "Remaining" output from this GeoSearch execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Removes the specified status from a favorites list.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Favorites_DestroyFavorite extends Temboo_Choreography
{
    /**
     * Removes the specified status from a favorites list.
     *
     * @param Temboo_Session $session The session that owns this DestroyFavorite Choreo.
     * @return Twitter_Favorites_DestroyFavorite New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Favorites/DestroyFavorite/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DestroyFavorite Choreo.
     *
     * @param Twitter_Favorites_DestroyFavorite_Inputs|array $inputs (optional) Inputs as Twitter_Favorites_DestroyFavorite_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Favorites_DestroyFavorite_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Favorites_DestroyFavorite_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DestroyFavorite Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Favorites_DestroyFavorite_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Favorites_DestroyFavorite_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DestroyFavorite Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Favorites_DestroyFavorite_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DestroyFavorite Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Favorites_DestroyFavorite_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DestroyFavorite input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Favorites_DestroyFavorite_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Favorites_DestroyFavorite_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this DestroyFavorite Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Favorites_DestroyFavorite_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this DestroyFavorite Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Favorites_DestroyFavorite_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this DestroyFavorite Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Favorites_DestroyFavorite_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this DestroyFavorite Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Favorites_DestroyFavorite_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ID input for this DestroyFavorite Choreo.
     *
     * @param string $value (required, string) The ID of the status to remove from your favorites.
     * @return Twitter_Favorites_DestroyFavorite_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this DestroyFavorite Choreo.
     *
     * @param bool $value (optional, boolean) The "entities" node containing extra metadata will not be included when set to false.
     * @return Twitter_Favorites_DestroyFavorite_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }
}


/**
 * Execution object for the DestroyFavorite Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Favorites_DestroyFavorite_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DestroyFavorite Choreo.
     *
     * @param Temboo_Session $session The session that owns this DestroyFavorite execution.
     * @param Twitter_Favorites_DestroyFavorite $choreo The choreography object for this execution.
     * @param Twitter_Favorites_DestroyFavorite_Inputs|array $inputs (optional) Inputs as Twitter_Favorites_DestroyFavorite_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Favorites_DestroyFavorite_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Favorites_DestroyFavorite $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DestroyFavorite execution.
     *
     * @return Twitter_Favorites_DestroyFavorite_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this DestroyFavorite execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Favorites_DestroyFavorite_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Favorites_DestroyFavorite_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DestroyFavorite Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Favorites_DestroyFavorite_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DestroyFavorite Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Favorites_DestroyFavorite_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DestroyFavorite execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns user objects for up to 100 Twitter users.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_Lookup extends Temboo_Choreography
{
    /**
     * Returns user objects for up to 100 Twitter users.
     *
     * @param Temboo_Session $session The session that owns this Lookup Choreo.
     * @return Twitter_Users_Lookup New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Users/Lookup/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Lookup Choreo.
     *
     * @param Twitter_Users_Lookup_Inputs|array $inputs (optional) Inputs as Twitter_Users_Lookup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Users_Lookup_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Users_Lookup_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Lookup Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Users_Lookup_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Users_Lookup_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Lookup Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_Lookup_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Lookup Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Users_Lookup_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Lookup input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Users_Lookup_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Users_Lookup_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this Lookup Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Users_Lookup_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this Lookup Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Users_Lookup_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this Lookup Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Users_Lookup_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this Lookup Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Users_Lookup_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this Lookup Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, the response will include the "entities" node.
     * @return Twitter_Users_Lookup_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the ScreenName input for this Lookup Choreo.
     *
     * @param string $value (conditional, string) A comma-separated list of up to 100 screen names. Required if UserId isn't specified.
     * @return Twitter_Users_Lookup_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the UserId input for this Lookup Choreo.
     *
     * @param int $value (conditional, integer) A comma-separated list of up to 100 user IDs. Required if ScreenName isn't specified.
     * @return Twitter_Users_Lookup_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the Lookup Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_Lookup_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Lookup Choreo.
     *
     * @param Temboo_Session $session The session that owns this Lookup execution.
     * @param Twitter_Users_Lookup $choreo The choreography object for this execution.
     * @param Twitter_Users_Lookup_Inputs|array $inputs (optional) Inputs as Twitter_Users_Lookup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Users_Lookup_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Users_Lookup $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Lookup execution.
     *
     * @return Twitter_Users_Lookup_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Lookup execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Users_Lookup_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Users_Lookup_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Lookup Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_Lookup_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Lookup Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Users_Lookup_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Lookup execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the subscribers for a specified list.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_GetSubscribers extends Temboo_Choreography
{
    /**
     * Retrieves the subscribers for a specified list.
     *
     * @param Temboo_Session $session The session that owns this GetSubscribers Choreo.
     * @return Twitter_Lists_GetSubscribers New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Lists/GetSubscribers/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetSubscribers Choreo.
     *
     * @param Twitter_Lists_GetSubscribers_Inputs|array $inputs (optional) Inputs as Twitter_Lists_GetSubscribers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Lists_GetSubscribers_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Lists_GetSubscribers_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetSubscribers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Lists_GetSubscribers_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Lists_GetSubscribers_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetSubscribers Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_GetSubscribers_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetSubscribers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Lists_GetSubscribers_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetSubscribers input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Lists_GetSubscribers_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Lists_GetSubscribers_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetSubscribers Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Lists_GetSubscribers_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetSubscribers Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Lists_GetSubscribers_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetSubscribers Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Lists_GetSubscribers_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetSubscribers Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Lists_GetSubscribers_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Cursor input for this GetSubscribers Choreo.
     *
     * @param string $value (optional, string) Allows you to pass in the previous_cursor or next_cursor in order to page through results.
     * @return Twitter_Lists_GetSubscribers_Inputs For method chaining.
     */
    public function setCursor($value)
    {
        return $this->set('Cursor', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this GetSubscribers Choreo.
     *
     * @param bool $value (optional, boolean) The "entities" node containing extra metadata will not be included when set to false.
     * @return Twitter_Lists_GetSubscribers_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the ListId input for this GetSubscribers Choreo.
     *
     * @param string $value (conditional, string) The numerical ID of the list. Required unless Slug is provided.
     * @return Twitter_Lists_GetSubscribers_Inputs For method chaining.
     */
    public function setListId($value)
    {
        return $this->set('ListId', $value);
    }

    /**
     * Set the value for the OwnerId input for this GetSubscribers Choreo.
     *
     * @param string $value (optional, string) The user ID of the user who owns the list being requested by a slug.
     * @return Twitter_Lists_GetSubscribers_Inputs For method chaining.
     */
    public function setOwnerId($value)
    {
        return $this->set('OwnerId', $value);
    }

    /**
     * Set the value for the OwnerScreenName input for this GetSubscribers Choreo.
     *
     * @param string $value (optional, string) The screen name of the user who owns the list being requested by a slug.
     * @return Twitter_Lists_GetSubscribers_Inputs For method chaining.
     */
    public function setOwnerScreenName($value)
    {
        return $this->set('OwnerScreenName', $value);
    }

    /**
     * Set the value for the SkipStatus input for this GetSubscribers Choreo.
     *
     * @param bool $value (optional, boolean) When set to either true, statuses will not be included in the returned user objects.
     * @return Twitter_Lists_GetSubscribers_Inputs For method chaining.
     */
    public function setSkipStatus($value)
    {
        return $this->set('SkipStatus', $value);
    }

    /**
     * Set the value for the Slug input for this GetSubscribers Choreo.
     *
     * @param string $value (optional, string) When identifying a list by a slug, either OwnerScreenName or OwnerId must be provided.
     * @return Twitter_Lists_GetSubscribers_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }
}


/**
 * Execution object for the GetSubscribers Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_GetSubscribers_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetSubscribers Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetSubscribers execution.
     * @param Twitter_Lists_GetSubscribers $choreo The choreography object for this execution.
     * @param Twitter_Lists_GetSubscribers_Inputs|array $inputs (optional) Inputs as Twitter_Lists_GetSubscribers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Lists_GetSubscribers_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Lists_GetSubscribers $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetSubscribers execution.
     *
     * @return Twitter_Lists_GetSubscribers_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetSubscribers execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Lists_GetSubscribers_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Lists_GetSubscribers_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetSubscribers Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_GetSubscribers_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetSubscribers Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Lists_GetSubscribers_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Remaining" output from this GetSubscribers execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Reset" output from this GetSubscribers execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
    /**
     * Retrieve the value for the "Response" output from this GetSubscribers execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Limit" output from this GetSubscribers execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
}

/**
 * Retrieves a collection of the most recent Tweets and retweets posted by the authenticating user and the users they follow.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_HomeTimeline extends Temboo_Choreography
{
    /**
     * Retrieves a collection of the most recent Tweets and retweets posted by the authenticating user and the users they follow.
     *
     * @param Temboo_Session $session The session that owns this HomeTimeline Choreo.
     * @return Twitter_Timelines_HomeTimeline New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Timelines/HomeTimeline/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this HomeTimeline Choreo.
     *
     * @param Twitter_Timelines_HomeTimeline_Inputs|array $inputs (optional) Inputs as Twitter_Timelines_HomeTimeline_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Timelines_HomeTimeline_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Timelines_HomeTimeline_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this HomeTimeline Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Timelines_HomeTimeline_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Timelines_HomeTimeline_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the HomeTimeline Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_HomeTimeline_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the HomeTimeline Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Timelines_HomeTimeline_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this HomeTimeline input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this HomeTimeline Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this HomeTimeline Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this HomeTimeline Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this HomeTimeline Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ContributorDetails input for this HomeTimeline Choreo.
     *
     * @param bool $value (optional, boolean) Set to true to include the screen_name of the contributor. By default only the user_id of the contributor is included.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function setContributorDetails($value)
    {
        return $this->set('ContributorDetails', $value);
    }

    /**
     * Set the value for the Count input for this HomeTimeline Choreo.
     *
     * @param int $value (optional, integer) Specifies the number of records to retrieve. Must be less than or equal to 200. Defaults to 20.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the ExcludeReplies input for this HomeTimeline Choreo.
     *
     * @param bool $value (optional, boolean) Set to true to prevent replies from appearing in the returned timeline.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function setExcludeReplies($value)
    {
        return $this->set('ExcludeReplies', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this HomeTimeline Choreo.
     *
     * @param bool $value (optional, boolean) The "entities" node containing extra metadata will not be included when set to false.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the MaxId input for this HomeTimeline Choreo.
     *
     * @param string $value (optional, string) Returns results with an ID less than (older than) or equal to the specified ID.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function setMaxId($value)
    {
        return $this->set('MaxId', $value);
    }

    /**
     * Set the value for the SinceId input for this HomeTimeline Choreo.
     *
     * @param string $value (optional, string) Returns results with an ID greater than (more recent than) the specified ID.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function setSinceId($value)
    {
        return $this->set('SinceId', $value);
    }

    /**
     * Set the value for the TrimUser input for this HomeTimeline Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, each tweet returned in a timeline will include a user object including only the status authors numerical ID. Defaults to false.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function setTrimUser($value)
    {
        return $this->set('TrimUser', $value);
    }
}


/**
 * Execution object for the HomeTimeline Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_HomeTimeline_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the HomeTimeline Choreo.
     *
     * @param Temboo_Session $session The session that owns this HomeTimeline execution.
     * @param Twitter_Timelines_HomeTimeline $choreo The choreography object for this execution.
     * @param Twitter_Timelines_HomeTimeline_Inputs|array $inputs (optional) Inputs as Twitter_Timelines_HomeTimeline_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Timelines_HomeTimeline_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Timelines_HomeTimeline $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this HomeTimeline execution.
     *
     * @return Twitter_Timelines_HomeTimeline_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this HomeTimeline execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Timelines_HomeTimeline_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Timelines_HomeTimeline_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the HomeTimeline Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_HomeTimeline_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the HomeTimeline Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Timelines_HomeTimeline_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Remaining" output from this HomeTimeline execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Limit" output from this HomeTimeline execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Response" output from this HomeTimeline execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Reset" output from this HomeTimeline execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
}

/**
 * Updates the authenticating user's settings such as trend location and sleep time settings.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_UpdateAccountSettings extends Temboo_Choreography
{
    /**
     * Updates the authenticating user's settings such as trend location and sleep time settings.
     *
     * @param Temboo_Session $session The session that owns this UpdateAccountSettings Choreo.
     * @return Twitter_Users_UpdateAccountSettings New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Users/UpdateAccountSettings/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateAccountSettings Choreo.
     *
     * @param Twitter_Users_UpdateAccountSettings_Inputs|array $inputs (optional) Inputs as Twitter_Users_UpdateAccountSettings_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Users_UpdateAccountSettings_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Users_UpdateAccountSettings_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateAccountSettings Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Users_UpdateAccountSettings_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Users_UpdateAccountSettings_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateAccountSettings Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_UpdateAccountSettings_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateAccountSettings Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Users_UpdateAccountSettings_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateAccountSettings input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Users_UpdateAccountSettings_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Users_UpdateAccountSettings_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this UpdateAccountSettings Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Users_UpdateAccountSettings_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this UpdateAccountSettings Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Users_UpdateAccountSettings_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this UpdateAccountSettings Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Users_UpdateAccountSettings_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this UpdateAccountSettings Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Users_UpdateAccountSettings_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the EndSleepTime input for this UpdateAccountSettings Choreo.
     *
     * @param string $value (optional, string) The hour that sleep time should end if it is enabled. The value should be provided in ISO8601 format (e.g., 00-23).
     * @return Twitter_Users_UpdateAccountSettings_Inputs For method chaining.
     */
    public function setEndSleepTime($value)
    {
        return $this->set('EndSleepTime', $value);
    }

    /**
     * Set the value for the Language input for this UpdateAccountSettings Choreo.
     *
     * @param string $value (optional, string) The language which Twitter should render in for this user. The language must be specified by the appropriate two letter ISO 639-1 representation.
     * @return Twitter_Users_UpdateAccountSettings_Inputs For method chaining.
     */
    public function setLanguage($value)
    {
        return $this->set('Language', $value);
    }

    /**
     * Set the value for the SleepTimeEnabled input for this UpdateAccountSettings Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, enables sleep time for the user. Sleep time is when push or SMS notifications should not be sent to the user.
     * @return Twitter_Users_UpdateAccountSettings_Inputs For method chaining.
     */
    public function setSleepTimeEnabled($value)
    {
        return $this->set('SleepTimeEnabled', $value);
    }

    /**
     * Set the value for the StartSleepTime input for this UpdateAccountSettings Choreo.
     *
     * @param string $value (optional, string) The hour that sleep time should begin if it is enabled. The value should be provided in ISO8601 format (e.g., 00-23).
     * @return Twitter_Users_UpdateAccountSettings_Inputs For method chaining.
     */
    public function setStartSleepTime($value)
    {
        return $this->set('StartSleepTime', $value);
    }

    /**
     * Set the value for the Timezone input for this UpdateAccountSettings Choreo.
     *
     * @param string $value (optional, string) The timezone dates and times that should be displayed for the user (e.g., Europe/Copenhagen, Pacific/Tongatapu)
     * @return Twitter_Users_UpdateAccountSettings_Inputs For method chaining.
     */
    public function setTimezone($value)
    {
        return $this->set('Timezone', $value);
    }

    /**
     * Set the value for the TrendLocationWOEID input for this UpdateAccountSettings Choreo.
     *
     * @param string $value (optional, string) The Yahoo! Where On Earth ID to use as the user's default trend location.
     * @return Twitter_Users_UpdateAccountSettings_Inputs For method chaining.
     */
    public function setTrendLocationWOEID($value)
    {
        return $this->set('TrendLocationWOEID', $value);
    }
}


/**
 * Execution object for the UpdateAccountSettings Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_UpdateAccountSettings_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateAccountSettings Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateAccountSettings execution.
     * @param Twitter_Users_UpdateAccountSettings $choreo The choreography object for this execution.
     * @param Twitter_Users_UpdateAccountSettings_Inputs|array $inputs (optional) Inputs as Twitter_Users_UpdateAccountSettings_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Users_UpdateAccountSettings_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Users_UpdateAccountSettings $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateAccountSettings execution.
     *
     * @return Twitter_Users_UpdateAccountSettings_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this UpdateAccountSettings execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Users_UpdateAccountSettings_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Users_UpdateAccountSettings_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateAccountSettings Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_UpdateAccountSettings_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateAccountSettings Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Users_UpdateAccountSettings_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Remaining" output from this UpdateAccountSettings execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Limit" output from this UpdateAccountSettings execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Reset" output from this UpdateAccountSettings execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateAccountSettings execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Removes one or more members from a list.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_DestroyMember extends Temboo_Choreography
{
    /**
     * Removes one or more members from a list.
     *
     * @param Temboo_Session $session The session that owns this DestroyMember Choreo.
     * @return Twitter_Lists_DestroyMember New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Lists/DestroyMember/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DestroyMember Choreo.
     *
     * @param Twitter_Lists_DestroyMember_Inputs|array $inputs (optional) Inputs as Twitter_Lists_DestroyMember_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Lists_DestroyMember_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Lists_DestroyMember_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DestroyMember Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Lists_DestroyMember_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Lists_DestroyMember_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DestroyMember Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_DestroyMember_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DestroyMember Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Lists_DestroyMember_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DestroyMember input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Lists_DestroyMember_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Lists_DestroyMember_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this DestroyMember Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Lists_DestroyMember_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this DestroyMember Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Lists_DestroyMember_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this DestroyMember Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Lists_DestroyMember_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this DestroyMember Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Lists_DestroyMember_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ListId input for this DestroyMember Choreo.
     *
     * @param string $value (conditional, string) The numerical ID of the list. Required unless Slug is provided.
     * @return Twitter_Lists_DestroyMember_Inputs For method chaining.
     */
    public function setListId($value)
    {
        return $this->set('ListId', $value);
    }

    /**
     * Set the value for the OwnerId input for this DestroyMember Choreo.
     *
     * @param string $value (optional, string) The user ID of the user who owns the list being requested by a slug.
     * @return Twitter_Lists_DestroyMember_Inputs For method chaining.
     */
    public function setOwnerId($value)
    {
        return $this->set('OwnerId', $value);
    }

    /**
     * Set the value for the OwnerScreenName input for this DestroyMember Choreo.
     *
     * @param string $value (optional, string) The screen name of the user who owns the list being requested by a slug.
     * @return Twitter_Lists_DestroyMember_Inputs For method chaining.
     */
    public function setOwnerScreenName($value)
    {
        return $this->set('OwnerScreenName', $value);
    }

    /**
     * Set the value for the ScreenName input for this DestroyMember Choreo.
     *
     * @param string $value (conditional, string) The screen name of the user to remove from the list. Required unless providing the UserId. Multiple screen names can be provided in a comma-separated list.
     * @return Twitter_Lists_DestroyMember_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the Slug input for this DestroyMember Choreo.
     *
     * @param string $value (optional, string) When identifying a list by a slug, either OwnerScreenName or OwnerId must be provided.
     * @return Twitter_Lists_DestroyMember_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }

    /**
     * Set the value for the UserId input for this DestroyMember Choreo.
     *
     * @param string $value (conditional, string) The ID of the user to remove from the list. Required unless providing the ScreenName. Multiple user IDs can be provided in a comma-separated list.
     * @return Twitter_Lists_DestroyMember_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the DestroyMember Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_DestroyMember_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DestroyMember Choreo.
     *
     * @param Temboo_Session $session The session that owns this DestroyMember execution.
     * @param Twitter_Lists_DestroyMember $choreo The choreography object for this execution.
     * @param Twitter_Lists_DestroyMember_Inputs|array $inputs (optional) Inputs as Twitter_Lists_DestroyMember_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Lists_DestroyMember_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Lists_DestroyMember $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DestroyMember execution.
     *
     * @return Twitter_Lists_DestroyMember_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this DestroyMember execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Lists_DestroyMember_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Lists_DestroyMember_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DestroyMember Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_DestroyMember_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DestroyMember Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Lists_DestroyMember_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DestroyMember execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a collection of the lists the specified user is subscribed to.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_GetSubscriptions extends Temboo_Choreography
{
    /**
     * Retrieves a collection of the lists the specified user is subscribed to.
     *
     * @param Temboo_Session $session The session that owns this GetSubscriptions Choreo.
     * @return Twitter_Lists_GetSubscriptions New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Lists/GetSubscriptions/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetSubscriptions Choreo.
     *
     * @param Twitter_Lists_GetSubscriptions_Inputs|array $inputs (optional) Inputs as Twitter_Lists_GetSubscriptions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Lists_GetSubscriptions_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Lists_GetSubscriptions_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetSubscriptions Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Lists_GetSubscriptions_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Lists_GetSubscriptions_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetSubscriptions Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_GetSubscriptions_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetSubscriptions Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Lists_GetSubscriptions_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetSubscriptions input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Lists_GetSubscriptions_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Lists_GetSubscriptions_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetSubscriptions Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Lists_GetSubscriptions_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetSubscriptions Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Lists_GetSubscriptions_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetSubscriptions Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Lists_GetSubscriptions_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetSubscriptions Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Lists_GetSubscriptions_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Count input for this GetSubscriptions Choreo.
     *
     * @param int $value (optional, integer) The number of results to return per page.
     * @return Twitter_Lists_GetSubscriptions_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the Cursor input for this GetSubscriptions Choreo.
     *
     * @param string $value (optional, string) Allows you to pass in the previous_cursor or next_cursor in order to page through results.
     * @return Twitter_Lists_GetSubscriptions_Inputs For method chaining.
     */
    public function setCursor($value)
    {
        return $this->set('Cursor', $value);
    }

    /**
     * Set the value for the ScreenName input for this GetSubscriptions Choreo.
     *
     * @param string $value (conditional, string) The screen name of the user for whom to return results for. If not provided, the memberships for the authenticating user are returned.
     * @return Twitter_Lists_GetSubscriptions_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the UserId input for this GetSubscriptions Choreo.
     *
     * @param string $value (conditional, string) The ID of the user for whom to return results for. If not provided, the memberships for the authenticating user are returned.
     * @return Twitter_Lists_GetSubscriptions_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the GetSubscriptions Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_GetSubscriptions_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetSubscriptions Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetSubscriptions execution.
     * @param Twitter_Lists_GetSubscriptions $choreo The choreography object for this execution.
     * @param Twitter_Lists_GetSubscriptions_Inputs|array $inputs (optional) Inputs as Twitter_Lists_GetSubscriptions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Lists_GetSubscriptions_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Lists_GetSubscriptions $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetSubscriptions execution.
     *
     * @return Twitter_Lists_GetSubscriptions_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetSubscriptions execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Lists_GetSubscriptions_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Lists_GetSubscriptions_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetSubscriptions Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_GetSubscriptions_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetSubscriptions Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Lists_GetSubscriptions_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this GetSubscriptions execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Reset" output from this GetSubscriptions execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
    /**
     * Retrieve the value for the "Response" output from this GetSubscriptions execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Remaining" output from this GetSubscriptions execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Retrieves a collection of user objects for users following the specified user.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_ListFollowers extends Temboo_Choreography
{
    /**
     * Retrieves a collection of user objects for users following the specified user.
     *
     * @param Temboo_Session $session The session that owns this ListFollowers Choreo.
     * @return Twitter_FriendsAndFollowers_ListFollowers New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/FriendsAndFollowers/ListFollowers/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListFollowers Choreo.
     *
     * @param Twitter_FriendsAndFollowers_ListFollowers_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_ListFollowers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_ListFollowers_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_FriendsAndFollowers_ListFollowers_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListFollowers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_ListFollowers_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_FriendsAndFollowers_ListFollowers_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListFollowers Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_ListFollowers_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListFollowers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_ListFollowers_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListFollowers input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_FriendsAndFollowers_ListFollowers_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_FriendsAndFollowers_ListFollowers_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this ListFollowers Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_ListFollowers_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this ListFollowers Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_ListFollowers_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this ListFollowers Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_FriendsAndFollowers_ListFollowers_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this ListFollowers Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_FriendsAndFollowers_ListFollowers_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Cursor input for this ListFollowers Choreo.
     *
     * @param string $value (optional, string) Allows you to pass in the previous_cursor or next_cursor in order to page through results.
     * @return Twitter_FriendsAndFollowers_ListFollowers_Inputs For method chaining.
     */
    public function setCursor($value)
    {
        return $this->set('Cursor', $value);
    }

    /**
     * Set the value for the IncludeUserEntities input for this ListFollowers Choreo.
     *
     * @param bool $value (optional, boolean) The user "entities" node containing extra metadata will not be included when set to false.
     * @return Twitter_FriendsAndFollowers_ListFollowers_Inputs For method chaining.
     */
    public function setIncludeUserEntities($value)
    {
        return $this->set('IncludeUserEntities', $value);
    }

    /**
     * Set the value for the ScreenName input for this ListFollowers Choreo.
     *
     * @param string $value (conditional, string) The screen name of the user for whom to return results for. Required if UserID isn't specified.
     * @return Twitter_FriendsAndFollowers_ListFollowers_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the SkipStatus input for this ListFollowers Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, statuses will not be included in the returned user objects.
     * @return Twitter_FriendsAndFollowers_ListFollowers_Inputs For method chaining.
     */
    public function setSkipStatus($value)
    {
        return $this->set('SkipStatus', $value);
    }

    /**
     * Set the value for the StringifyIDs input for this ListFollowers Choreo.
     *
     * @param bool $value (optional, boolean) A boolean flag indicating that Tweet IDs should be returned as strings.
     * @return Twitter_FriendsAndFollowers_ListFollowers_Inputs For method chaining.
     */
    public function setStringifyIDs($value)
    {
        return $this->set('StringifyIDs', $value);
    }

    /**
     * Set the value for the UserID input for this ListFollowers Choreo.
     *
     * @param string $value (conditional, string) The ID of the user for whom to return results for. Required if ScreenName isn't specified.
     * @return Twitter_FriendsAndFollowers_ListFollowers_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the ListFollowers Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_ListFollowers_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListFollowers Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListFollowers execution.
     * @param Twitter_FriendsAndFollowers_ListFollowers $choreo The choreography object for this execution.
     * @param Twitter_FriendsAndFollowers_ListFollowers_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_ListFollowers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_ListFollowers_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_FriendsAndFollowers_ListFollowers $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListFollowers execution.
     *
     * @return Twitter_FriendsAndFollowers_ListFollowers_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this ListFollowers execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_ListFollowers_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_FriendsAndFollowers_ListFollowers_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListFollowers Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_ListFollowers_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListFollowers Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_ListFollowers_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this ListFollowers execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Response" output from this ListFollowers execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Reset" output from this ListFollowers execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
    /**
     * Retrieve the value for the "Remaining" output from this ListFollowers execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Retrieves a list of numeric IDs for every user who has a pending request to follow the authenticating user.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_IncomingFriendships extends Temboo_Choreography
{
    /**
     * Retrieves a list of numeric IDs for every user who has a pending request to follow the authenticating user.
     *
     * @param Temboo_Session $session The session that owns this IncomingFriendships Choreo.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/FriendsAndFollowers/IncomingFriendships/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this IncomingFriendships Choreo.
     *
     * @param Twitter_FriendsAndFollowers_IncomingFriendships_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_IncomingFriendships_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_FriendsAndFollowers_IncomingFriendships_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this IncomingFriendships Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_FriendsAndFollowers_IncomingFriendships_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the IncomingFriendships Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_IncomingFriendships_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the IncomingFriendships Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this IncomingFriendships input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this IncomingFriendships Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this IncomingFriendships Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this IncomingFriendships Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this IncomingFriendships Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Cursor input for this IncomingFriendships Choreo.
     *
     * @param int $value (optional, integer) Allows you to pass in the previous_cursor or next_cursor in order to page through results.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Inputs For method chaining.
     */
    public function setCursor($value)
    {
        return $this->set('Cursor', $value);
    }

    /**
     * Set the value for the StringifyIDs input for this IncomingFriendships Choreo.
     *
     * @param bool $value (optional, boolean) A boolean flag indicating that Tweet IDs should be returned as strings.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Inputs For method chaining.
     */
    public function setStringifyIDs($value)
    {
        return $this->set('StringifyIDs', $value);
    }
}


/**
 * Execution object for the IncomingFriendships Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_IncomingFriendships_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the IncomingFriendships Choreo.
     *
     * @param Temboo_Session $session The session that owns this IncomingFriendships execution.
     * @param Twitter_FriendsAndFollowers_IncomingFriendships $choreo The choreography object for this execution.
     * @param Twitter_FriendsAndFollowers_IncomingFriendships_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_IncomingFriendships_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_FriendsAndFollowers_IncomingFriendships $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this IncomingFriendships execution.
     *
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this IncomingFriendships execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_FriendsAndFollowers_IncomingFriendships_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the IncomingFriendships Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_IncomingFriendships_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the IncomingFriendships Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this IncomingFriendships execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Remaining" output from this IncomingFriendships execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Limit" output from this IncomingFriendships execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Reset" output from this IncomingFriendships execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
}

/**
 * Retrieves a collection of user objects for every user the specified user is following.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_ListFriends extends Temboo_Choreography
{
    /**
     * Retrieves a collection of user objects for every user the specified user is following.
     *
     * @param Temboo_Session $session The session that owns this ListFriends Choreo.
     * @return Twitter_FriendsAndFollowers_ListFriends New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/FriendsAndFollowers/ListFriends/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListFriends Choreo.
     *
     * @param Twitter_FriendsAndFollowers_ListFriends_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_ListFriends_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_ListFriends_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_FriendsAndFollowers_ListFriends_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListFriends Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_ListFriends_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_FriendsAndFollowers_ListFriends_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListFriends Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_ListFriends_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListFriends Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_ListFriends_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListFriends input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_FriendsAndFollowers_ListFriends_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_FriendsAndFollowers_ListFriends_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this ListFriends Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_ListFriends_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this ListFriends Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_ListFriends_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this ListFriends Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_FriendsAndFollowers_ListFriends_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this ListFriends Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_FriendsAndFollowers_ListFriends_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Cursor input for this ListFriends Choreo.
     *
     * @param string $value (optional, string) Allows you to pass in the previous_cursor or next_cursor in order to page through results.
     * @return Twitter_FriendsAndFollowers_ListFriends_Inputs For method chaining.
     */
    public function setCursor($value)
    {
        return $this->set('Cursor', $value);
    }

    /**
     * Set the value for the IncludeUserEntities input for this ListFriends Choreo.
     *
     * @param bool $value (optional, boolean) The user "entities" node containing extra metadata will not be included when set to false.
     * @return Twitter_FriendsAndFollowers_ListFriends_Inputs For method chaining.
     */
    public function setIncludeUserEntities($value)
    {
        return $this->set('IncludeUserEntities', $value);
    }

    /**
     * Set the value for the ScreenName input for this ListFriends Choreo.
     *
     * @param string $value (conditional, string) The screen name of the user for whom to return results for. Required if UserID isn't specified.
     * @return Twitter_FriendsAndFollowers_ListFriends_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the SkipStatus input for this ListFriends Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, statuses will not be included in the returned user objects.
     * @return Twitter_FriendsAndFollowers_ListFriends_Inputs For method chaining.
     */
    public function setSkipStatus($value)
    {
        return $this->set('SkipStatus', $value);
    }

    /**
     * Set the value for the StringifyIDs input for this ListFriends Choreo.
     *
     * @param bool $value (optional, boolean) A boolean flag indicating that Tweet IDs should be returned as strings.
     * @return Twitter_FriendsAndFollowers_ListFriends_Inputs For method chaining.
     */
    public function setStringifyIDs($value)
    {
        return $this->set('StringifyIDs', $value);
    }

    /**
     * Set the value for the UserID input for this ListFriends Choreo.
     *
     * @param string $value (conditional, string) The ID of the user for whom to return results for. Required if ScreenName isn't specified.
     * @return Twitter_FriendsAndFollowers_ListFriends_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the ListFriends Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_ListFriends_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListFriends Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListFriends execution.
     * @param Twitter_FriendsAndFollowers_ListFriends $choreo The choreography object for this execution.
     * @param Twitter_FriendsAndFollowers_ListFriends_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_ListFriends_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_ListFriends_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_FriendsAndFollowers_ListFriends $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListFriends execution.
     *
     * @return Twitter_FriendsAndFollowers_ListFriends_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this ListFriends execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_ListFriends_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_FriendsAndFollowers_ListFriends_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListFriends Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_ListFriends_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListFriends Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_ListFriends_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Reset" output from this ListFriends execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
    /**
     * Retrieve the value for the "Response" output from this ListFriends execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Limit" output from this ListFriends execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this ListFriends execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Adds one or more members to a list.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_CreateMember extends Temboo_Choreography
{
    /**
     * Adds one or more members to a list.
     *
     * @param Temboo_Session $session The session that owns this CreateMember Choreo.
     * @return Twitter_Lists_CreateMember New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Lists/CreateMember/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateMember Choreo.
     *
     * @param Twitter_Lists_CreateMember_Inputs|array $inputs (optional) Inputs as Twitter_Lists_CreateMember_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Lists_CreateMember_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Lists_CreateMember_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateMember Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Lists_CreateMember_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Lists_CreateMember_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateMember Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_CreateMember_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateMember Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Lists_CreateMember_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateMember input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Lists_CreateMember_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Lists_CreateMember_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this CreateMember Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Lists_CreateMember_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this CreateMember Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Lists_CreateMember_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this CreateMember Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Lists_CreateMember_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this CreateMember Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Lists_CreateMember_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ListId input for this CreateMember Choreo.
     *
     * @param string $value (conditional, string) The numerical ID of the list. Required unless Slug is provided.
     * @return Twitter_Lists_CreateMember_Inputs For method chaining.
     */
    public function setListId($value)
    {
        return $this->set('ListId', $value);
    }

    /**
     * Set the value for the OwnerId input for this CreateMember Choreo.
     *
     * @param string $value (optional, string) The user ID of the user who owns the list being requested by a slug.
     * @return Twitter_Lists_CreateMember_Inputs For method chaining.
     */
    public function setOwnerId($value)
    {
        return $this->set('OwnerId', $value);
    }

    /**
     * Set the value for the OwnerScreenName input for this CreateMember Choreo.
     *
     * @param string $value (optional, string) The screen name of the user who owns the list being requested by a slug.
     * @return Twitter_Lists_CreateMember_Inputs For method chaining.
     */
    public function setOwnerScreenName($value)
    {
        return $this->set('OwnerScreenName', $value);
    }

    /**
     * Set the value for the ScreenName input for this CreateMember Choreo.
     *
     * @param string $value (conditional, string) The screen name of the user to add to the list. Required unless providing the UserId. Multiple screen names can be provided in a comma-separated list.
     * @return Twitter_Lists_CreateMember_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the Slug input for this CreateMember Choreo.
     *
     * @param string $value (optional, string) When identifying a list by a slug, either OwnerScreenName or OwnerId must be provided.
     * @return Twitter_Lists_CreateMember_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }

    /**
     * Set the value for the UserId input for this CreateMember Choreo.
     *
     * @param string $value (conditional, string) The ID of the user to add to the list. Required unless providing the ScreenName. Multiple user IDs can be provided in a comma-separated list.
     * @return Twitter_Lists_CreateMember_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the CreateMember Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_CreateMember_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateMember Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateMember execution.
     * @param Twitter_Lists_CreateMember $choreo The choreography object for this execution.
     * @param Twitter_Lists_CreateMember_Inputs|array $inputs (optional) Inputs as Twitter_Lists_CreateMember_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Lists_CreateMember_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Lists_CreateMember $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateMember execution.
     *
     * @return Twitter_Lists_CreateMember_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this CreateMember execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Lists_CreateMember_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Lists_CreateMember_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateMember Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_CreateMember_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateMember Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Lists_CreateMember_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateMember execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to update your Twitter status (aka Tweet).
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_StatusesUpdate extends Temboo_Choreography
{
    /**
     * Allows you to update your Twitter status (aka Tweet).
     *
     * @param Temboo_Session $session The session that owns this StatusesUpdate Choreo.
     * @return Twitter_Tweets_StatusesUpdate New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Tweets/StatusesUpdate/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this StatusesUpdate Choreo.
     *
     * @param Twitter_Tweets_StatusesUpdate_Inputs|array $inputs (optional) Inputs as Twitter_Tweets_StatusesUpdate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Tweets_StatusesUpdate_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Tweets_StatusesUpdate_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this StatusesUpdate Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Tweets_StatusesUpdate_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Tweets_StatusesUpdate_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the StatusesUpdate Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_StatusesUpdate_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the StatusesUpdate Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Tweets_StatusesUpdate_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this StatusesUpdate input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Tweets_StatusesUpdate_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Tweets_StatusesUpdate_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this StatusesUpdate Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Tweets_StatusesUpdate_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this StatusesUpdate Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Tweets_StatusesUpdate_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this StatusesUpdate Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Tweets_StatusesUpdate_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this StatusesUpdate Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Tweets_StatusesUpdate_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the DisplayCoordinates input for this StatusesUpdate Choreo.
     *
     * @param bool $value (optional, boolean) Whether or not to put a pin on the exact coordinates a tweet has been sent from.
     * @return Twitter_Tweets_StatusesUpdate_Inputs For method chaining.
     */
    public function setDisplayCoordinates($value)
    {
        return $this->set('DisplayCoordinates', $value);
    }

    /**
     * Set the value for the InReplyTo input for this StatusesUpdate Choreo.
     *
     * @param string $value (optional, string) The ID of an existing status that the update is in reply to.
     * @return Twitter_Tweets_StatusesUpdate_Inputs For method chaining.
     */
    public function setInReplyTo($value)
    {
        return $this->set('InReplyTo', $value);
    }

    /**
     * Set the value for the Latitude input for this StatusesUpdate Choreo.
     *
     * @param float $value (optional, decimal) The latitude of the location this tweet refers to.
     * @return Twitter_Tweets_StatusesUpdate_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this StatusesUpdate Choreo.
     *
     * @param float $value (optional, decimal) The longitude of the location this tweet refers to.
     * @return Twitter_Tweets_StatusesUpdate_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the PlaceID input for this StatusesUpdate Choreo.
     *
     * @param string $value (optional, string) The ID associated with a place in the world. These IDs can be retrieved from the PlacesAndGeo.ReverseGeocode Choreo.
     * @return Twitter_Tweets_StatusesUpdate_Inputs For method chaining.
     */
    public function setPlaceID($value)
    {
        return $this->set('PlaceID', $value);
    }

    /**
     * Set the value for the StatusUpdate input for this StatusesUpdate Choreo.
     *
     * @param string $value (required, string) The text for your status update. 140-character limit.
     * @return Twitter_Tweets_StatusesUpdate_Inputs For method chaining.
     */
    public function setStatusUpdate($value)
    {
        return $this->set('StatusUpdate', $value);
    }

    /**
     * Set the value for the TrimUser input for this StatusesUpdate Choreo.
     *
     * @param bool $value (optional, boolean) When set to either true, each tweet returned in a timeline will include a user object including only the status authors numerical ID.
     * @return Twitter_Tweets_StatusesUpdate_Inputs For method chaining.
     */
    public function setTrimUser($value)
    {
        return $this->set('TrimUser', $value);
    }
}


/**
 * Execution object for the StatusesUpdate Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_StatusesUpdate_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the StatusesUpdate Choreo.
     *
     * @param Temboo_Session $session The session that owns this StatusesUpdate execution.
     * @param Twitter_Tweets_StatusesUpdate $choreo The choreography object for this execution.
     * @param Twitter_Tweets_StatusesUpdate_Inputs|array $inputs (optional) Inputs as Twitter_Tweets_StatusesUpdate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Tweets_StatusesUpdate_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Tweets_StatusesUpdate $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this StatusesUpdate execution.
     *
     * @return Twitter_Tweets_StatusesUpdate_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this StatusesUpdate execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Tweets_StatusesUpdate_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Tweets_StatusesUpdate_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the StatusesUpdate Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_StatusesUpdate_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the StatusesUpdate Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Tweets_StatusesUpdate_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this StatusesUpdate execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new list.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_CreateList extends Temboo_Choreography
{
    /**
     * Creates a new list.
     *
     * @param Temboo_Session $session The session that owns this CreateList Choreo.
     * @return Twitter_Lists_CreateList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Lists/CreateList/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateList Choreo.
     *
     * @param Twitter_Lists_CreateList_Inputs|array $inputs (optional) Inputs as Twitter_Lists_CreateList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Lists_CreateList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Lists_CreateList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Lists_CreateList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Lists_CreateList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateList Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_CreateList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Lists_CreateList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Lists_CreateList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Lists_CreateList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this CreateList Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Lists_CreateList_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this CreateList Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Lists_CreateList_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this CreateList Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Lists_CreateList_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this CreateList Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Lists_CreateList_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Description input for this CreateList Choreo.
     *
     * @param string $value (optional, string) A description of the list.
     * @return Twitter_Lists_CreateList_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the Mode input for this CreateList Choreo.
     *
     * @param string $value (optional, string) Indicates if this list is "public" (the default) or "private".
     * @return Twitter_Lists_CreateList_Inputs For method chaining.
     */
    public function setMode($value)
    {
        return $this->set('Mode', $value);
    }

    /**
     * Set the value for the Name input for this CreateList Choreo.
     *
     * @param string $value (required, string) The name of the new list.
     * @return Twitter_Lists_CreateList_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }
}


/**
 * Execution object for the CreateList Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_CreateList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateList Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateList execution.
     * @param Twitter_Lists_CreateList $choreo The choreography object for this execution.
     * @param Twitter_Lists_CreateList_Inputs|array $inputs (optional) Inputs as Twitter_Lists_CreateList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Lists_CreateList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Lists_CreateList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateList execution.
     *
     * @return Twitter_Lists_CreateList_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this CreateList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Lists_CreateList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Lists_CreateList_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateList Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_CreateList_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateList Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Lists_CreateList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateList execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the top 10 trending topics for a specific WOEID.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Trends_Place extends Temboo_Choreography
{
    /**
     * Retrieves the top 10 trending topics for a specific WOEID.
     *
     * @param Temboo_Session $session The session that owns this Place Choreo.
     * @return Twitter_Trends_Place New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Trends/Place/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Place Choreo.
     *
     * @param Twitter_Trends_Place_Inputs|array $inputs (optional) Inputs as Twitter_Trends_Place_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Trends_Place_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Trends_Place_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Place Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Trends_Place_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Trends_Place_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Place Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Trends_Place_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Place Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Trends_Place_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Place input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Trends_Place_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Trends_Place_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this Place Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Trends_Place_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this Place Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Trends_Place_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this Place Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Trends_Place_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this Place Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Trends_Place_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Exclude input for this Place Choreo.
     *
     * @param bool $value (optional, boolean) If set to "hashtags", all hashtags from the trends list will be removed.
     * @return Twitter_Trends_Place_Inputs For method chaining.
     */
    public function setExclude($value)
    {
        return $this->set('Exclude', $value);
    }

    /**
     * Set the value for the ID input for this Place Choreo.
     *
     * @param string $value (required, string) The (WOEID) Yahoo! Where On Earth ID of the location to return trending information for. Global information is available by setting this parameter to 1.
     * @return Twitter_Trends_Place_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }
}


/**
 * Execution object for the Place Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Trends_Place_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Place Choreo.
     *
     * @param Temboo_Session $session The session that owns this Place execution.
     * @param Twitter_Trends_Place $choreo The choreography object for this execution.
     * @param Twitter_Trends_Place_Inputs|array $inputs (optional) Inputs as Twitter_Trends_Place_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Trends_Place_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Trends_Place $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Place execution.
     *
     * @return Twitter_Trends_Place_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Place execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Trends_Place_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Trends_Place_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Place Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Trends_Place_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Place Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Trends_Place_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Place execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns detailed information about the relationship between two users.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_FriendshipsShow extends Temboo_Choreography
{
    /**
     * Returns detailed information about the relationship between two users.
     *
     * @param Temboo_Session $session The session that owns this FriendshipsShow Choreo.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/FriendsAndFollowers/FriendshipsShow/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FriendshipsShow Choreo.
     *
     * @param Twitter_FriendsAndFollowers_FriendshipsShow_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_FriendshipsShow_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_FriendsAndFollowers_FriendshipsShow_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FriendshipsShow Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_FriendsAndFollowers_FriendshipsShow_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FriendshipsShow Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_FriendshipsShow_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FriendshipsShow Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FriendshipsShow input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this FriendshipsShow Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this FriendshipsShow Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this FriendshipsShow Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this FriendshipsShow Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the SourceScreenName input for this FriendshipsShow Choreo.
     *
     * @param string $value (conditional, string) The screen_name of the subject user. Required unless specifying the SourceUserID instead.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Inputs For method chaining.
     */
    public function setSourceScreenName($value)
    {
        return $this->set('SourceScreenName', $value);
    }

    /**
     * Set the value for the SourceUserID input for this FriendshipsShow Choreo.
     *
     * @param string $value (conditional, string) The ID of the subject user. Required unless specifying the SourceScreenName instead.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Inputs For method chaining.
     */
    public function setSourceUserID($value)
    {
        return $this->set('SourceUserID', $value);
    }

    /**
     * Set the value for the TargetScreenName input for this FriendshipsShow Choreo.
     *
     * @param string $value (conditional, string) The screen_name of the target user. Required unless specifying the TargetUserID instead.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Inputs For method chaining.
     */
    public function setTargetScreenName($value)
    {
        return $this->set('TargetScreenName', $value);
    }

    /**
     * Set the value for the TargetUserID input for this FriendshipsShow Choreo.
     *
     * @param string $value (conditional, string) The ID of the target user. Required unless specifying the TargetScreenName instead.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Inputs For method chaining.
     */
    public function setTargetUserID($value)
    {
        return $this->set('TargetUserID', $value);
    }
}


/**
 * Execution object for the FriendshipsShow Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_FriendshipsShow_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FriendshipsShow Choreo.
     *
     * @param Temboo_Session $session The session that owns this FriendshipsShow execution.
     * @param Twitter_FriendsAndFollowers_FriendshipsShow $choreo The choreography object for this execution.
     * @param Twitter_FriendsAndFollowers_FriendshipsShow_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_FriendshipsShow_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_FriendsAndFollowers_FriendshipsShow $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FriendshipsShow execution.
     *
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this FriendshipsShow execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_FriendsAndFollowers_FriendshipsShow_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FriendshipsShow Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_FriendshipsShow_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FriendshipsShow Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FriendshipsShow execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the 20 most recent direct messages sent to the authenticating user.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_GetDirectMessages extends Temboo_Choreography
{
    /**
     * Retrieves the 20 most recent direct messages sent to the authenticating user.
     *
     * @param Temboo_Session $session The session that owns this GetDirectMessages Choreo.
     * @return Twitter_DirectMessages_GetDirectMessages New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/DirectMessages/GetDirectMessages/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetDirectMessages Choreo.
     *
     * @param Twitter_DirectMessages_GetDirectMessages_Inputs|array $inputs (optional) Inputs as Twitter_DirectMessages_GetDirectMessages_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_DirectMessages_GetDirectMessages_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_DirectMessages_GetDirectMessages_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetDirectMessages Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_DirectMessages_GetDirectMessages_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetDirectMessages Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_GetDirectMessages_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetDirectMessages Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetDirectMessages input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetDirectMessages Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetDirectMessages Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetDirectMessages Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetDirectMessages Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Count input for this GetDirectMessages Choreo.
     *
     * @param int $value (optional, integer) Specifies the number of records to retrieve up to a maximum of 200.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this GetDirectMessages Choreo.
     *
     * @param bool $value (optional, boolean) The "entities" node containing extra metadata will not be included when set to false.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the MaxID input for this GetDirectMessages Choreo.
     *
     * @param string $value (optional, string) Returns results with an ID less than (older than) or equal to the specified ID.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs For method chaining.
     */
    public function setMaxID($value)
    {
        return $this->set('MaxID', $value);
    }

    /**
     * Set the value for the Page input for this GetDirectMessages Choreo.
     *
     * @param int $value (optional, integer) Specifies the page of results to retrieve.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the SinceID input for this GetDirectMessages Choreo.
     *
     * @param string $value (optional, string) Returns results with an ID greater than (more recent than) the specified ID.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs For method chaining.
     */
    public function setSinceID($value)
    {
        return $this->set('SinceID', $value);
    }

    /**
     * Set the value for the SkipStatus input for this GetDirectMessages Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, statuses will not be included in the returned user objects.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs For method chaining.
     */
    public function setSkipStatus($value)
    {
        return $this->set('SkipStatus', $value);
    }
}


/**
 * Execution object for the GetDirectMessages Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_GetDirectMessages_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetDirectMessages Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetDirectMessages execution.
     * @param Twitter_DirectMessages_GetDirectMessages $choreo The choreography object for this execution.
     * @param Twitter_DirectMessages_GetDirectMessages_Inputs|array $inputs (optional) Inputs as Twitter_DirectMessages_GetDirectMessages_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_DirectMessages_GetDirectMessages_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_DirectMessages_GetDirectMessages $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetDirectMessages execution.
     *
     * @return Twitter_DirectMessages_GetDirectMessages_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetDirectMessages execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_DirectMessages_GetDirectMessages_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_DirectMessages_GetDirectMessages_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetDirectMessages Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_GetDirectMessages_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetDirectMessages Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_DirectMessages_GetDirectMessages_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Reset" output from this GetDirectMessages execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
    /**
     * Retrieve the value for the "Remaining" output from this GetDirectMessages execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Limit" output from this GetDirectMessages execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Response" output from this GetDirectMessages execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Locates places near the given coordinates which have a similar name.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_SimilarPlaces extends Temboo_Choreography
{
    /**
     * Locates places near the given coordinates which have a similar name.
     *
     * @param Temboo_Session $session The session that owns this SimilarPlaces Choreo.
     * @return Twitter_PlacesAndGeo_SimilarPlaces New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/PlacesAndGeo/SimilarPlaces/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SimilarPlaces Choreo.
     *
     * @param Twitter_PlacesAndGeo_SimilarPlaces_Inputs|array $inputs (optional) Inputs as Twitter_PlacesAndGeo_SimilarPlaces_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_PlacesAndGeo_SimilarPlaces_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SimilarPlaces Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_PlacesAndGeo_SimilarPlaces_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SimilarPlaces Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_SimilarPlaces_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SimilarPlaces Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SimilarPlaces input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this SimilarPlaces Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this SimilarPlaces Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Callback input for this SimilarPlaces Choreo.
     *
     * @param string $value (optional, string) If supplied, the response will use the JSONP format with a callback of the given name.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs For method chaining.
     */
    public function setCallback($value)
    {
        return $this->set('Callback', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this SimilarPlaces Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this SimilarPlaces Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ContainedWithin input for this SimilarPlaces Choreo.
     *
     * @param string $value (optional, string) This is the place_id which you would like to restrict the search results to. This id can be retrieved with the GetPlaceInformation Choreo.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs For method chaining.
     */
    public function setContainedWithin($value)
    {
        return $this->set('ContainedWithin', $value);
    }

    /**
     * Set the value for the Latitude input for this SimilarPlaces Choreo.
     *
     * @param float $value (required, decimal) The latitude to search around.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this SimilarPlaces Choreo.
     *
     * @param float $value (required, decimal) The longitude to search around.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the MaxResults input for this SimilarPlaces Choreo.
     *
     * @param int $value (optional, integer) The maximum number of results to return.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the Name input for this SimilarPlaces Choreo.
     *
     * @param string $value (required, string) The name of the place.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }
}


/**
 * Execution object for the SimilarPlaces Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_SimilarPlaces_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SimilarPlaces Choreo.
     *
     * @param Temboo_Session $session The session that owns this SimilarPlaces execution.
     * @param Twitter_PlacesAndGeo_SimilarPlaces $choreo The choreography object for this execution.
     * @param Twitter_PlacesAndGeo_SimilarPlaces_Inputs|array $inputs (optional) Inputs as Twitter_PlacesAndGeo_SimilarPlaces_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_PlacesAndGeo_SimilarPlaces $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SimilarPlaces execution.
     *
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this SimilarPlaces execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_PlacesAndGeo_SimilarPlaces_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SimilarPlaces Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_SimilarPlaces_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SimilarPlaces Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Remaining" output from this SimilarPlaces execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this SimilarPlaces execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Limit" output from this SimilarPlaces execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Reset" output from this SimilarPlaces execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
}

/**
 * Retrieves the members of a specified list.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_GetMembers extends Temboo_Choreography
{
    /**
     * Retrieves the members of a specified list.
     *
     * @param Temboo_Session $session The session that owns this GetMembers Choreo.
     * @return Twitter_Lists_GetMembers New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Lists/GetMembers/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetMembers Choreo.
     *
     * @param Twitter_Lists_GetMembers_Inputs|array $inputs (optional) Inputs as Twitter_Lists_GetMembers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Lists_GetMembers_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Lists_GetMembers_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetMembers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Lists_GetMembers_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Lists_GetMembers_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetMembers Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_GetMembers_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetMembers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Lists_GetMembers_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetMembers input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Lists_GetMembers_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Lists_GetMembers_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetMembers Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Lists_GetMembers_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetMembers Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Lists_GetMembers_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetMembers Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Lists_GetMembers_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetMembers Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Lists_GetMembers_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Cursor input for this GetMembers Choreo.
     *
     * @param string $value (optional, string) Allows you to pass in the previous_cursor or next_cursor in order to page through results.
     * @return Twitter_Lists_GetMembers_Inputs For method chaining.
     */
    public function setCursor($value)
    {
        return $this->set('Cursor', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this GetMembers Choreo.
     *
     * @param bool $value (optional, boolean) The "entities" node containing extra metadata will not be included when set to false.
     * @return Twitter_Lists_GetMembers_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the ListId input for this GetMembers Choreo.
     *
     * @param string $value (conditional, string) The numerical ID of the list. Required unless Slug is provided.
     * @return Twitter_Lists_GetMembers_Inputs For method chaining.
     */
    public function setListId($value)
    {
        return $this->set('ListId', $value);
    }

    /**
     * Set the value for the OwnerId input for this GetMembers Choreo.
     *
     * @param string $value (optional, string) The user ID of the user who owns the list being requested by a slug.
     * @return Twitter_Lists_GetMembers_Inputs For method chaining.
     */
    public function setOwnerId($value)
    {
        return $this->set('OwnerId', $value);
    }

    /**
     * Set the value for the OwnerScreenName input for this GetMembers Choreo.
     *
     * @param string $value (optional, string) The screen name of the user who owns the list being requested by a slug.
     * @return Twitter_Lists_GetMembers_Inputs For method chaining.
     */
    public function setOwnerScreenName($value)
    {
        return $this->set('OwnerScreenName', $value);
    }

    /**
     * Set the value for the SkipStatus input for this GetMembers Choreo.
     *
     * @param bool $value (optional, boolean) When set to either true, statuses will not be included in the returned user objects.
     * @return Twitter_Lists_GetMembers_Inputs For method chaining.
     */
    public function setSkipStatus($value)
    {
        return $this->set('SkipStatus', $value);
    }

    /**
     * Set the value for the Slug input for this GetMembers Choreo.
     *
     * @param string $value (optional, string) When identifying a list by a slug, either OwnerScreenName or OwnerId must be provided.
     * @return Twitter_Lists_GetMembers_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }
}


/**
 * Execution object for the GetMembers Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_GetMembers_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetMembers Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetMembers execution.
     * @param Twitter_Lists_GetMembers $choreo The choreography object for this execution.
     * @param Twitter_Lists_GetMembers_Inputs|array $inputs (optional) Inputs as Twitter_Lists_GetMembers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Lists_GetMembers_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Lists_GetMembers $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetMembers execution.
     *
     * @return Twitter_Lists_GetMembers_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetMembers execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Lists_GetMembers_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Lists_GetMembers_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetMembers Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_GetMembers_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetMembers Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Lists_GetMembers_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetMembers execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Limit" output from this GetMembers execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Reset" output from this GetMembers execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
    /**
     * Retrieve the value for the "Remaining" output from this GetMembers execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Retrieves information about a specific Twitter user.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_Show extends Temboo_Choreography
{
    /**
     * Retrieves information about a specific Twitter user.
     *
     * @param Temboo_Session $session The session that owns this Show Choreo.
     * @return Twitter_Users_Show New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Users/Show/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Show Choreo.
     *
     * @param Twitter_Users_Show_Inputs|array $inputs (optional) Inputs as Twitter_Users_Show_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Users_Show_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Users_Show_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Show Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Users_Show_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Users_Show_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Show Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_Show_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Show Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Users_Show_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Show input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Users_Show_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Users_Show_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this Show Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Users_Show_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this Show Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Users_Show_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this Show Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Users_Show_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this Show Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Users_Show_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this Show Choreo.
     *
     * @param bool $value (optional, boolean) The "entities" node containing extra metadata will not be included when set to false.
     * @return Twitter_Users_Show_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the ScreenName input for this Show Choreo.
     *
     * @param string $value (conditional, string) The screen name of the user for whom to return results for. Required if UserId isn't specified.
     * @return Twitter_Users_Show_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the UserId input for this Show Choreo.
     *
     * @param string $value (conditional, string) The ID of the user for whom to return results for. Required if ScreenName isn't specified.
     * @return Twitter_Users_Show_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the Show Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_Show_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Show Choreo.
     *
     * @param Temboo_Session $session The session that owns this Show execution.
     * @param Twitter_Users_Show $choreo The choreography object for this execution.
     * @param Twitter_Users_Show_Inputs|array $inputs (optional) Inputs as Twitter_Users_Show_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Users_Show_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Users_Show $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Show execution.
     *
     * @return Twitter_Users_Show_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Show execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Users_Show_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Users_Show_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Show Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_Show_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Show Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Users_Show_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this Show execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this Show execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Reset" output from this Show execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
    /**
     * Retrieve the value for the "Response" output from this Show execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a single Tweet with a given ID.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_StatusesShow extends Temboo_Choreography
{
    /**
     * Retrieves a single Tweet with a given ID.
     *
     * @param Temboo_Session $session The session that owns this StatusesShow Choreo.
     * @return Twitter_Tweets_StatusesShow New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Tweets/StatusesShow/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this StatusesShow Choreo.
     *
     * @param Twitter_Tweets_StatusesShow_Inputs|array $inputs (optional) Inputs as Twitter_Tweets_StatusesShow_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Tweets_StatusesShow_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Tweets_StatusesShow_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this StatusesShow Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Tweets_StatusesShow_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Tweets_StatusesShow_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the StatusesShow Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_StatusesShow_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the StatusesShow Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Tweets_StatusesShow_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this StatusesShow input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Tweets_StatusesShow_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Tweets_StatusesShow_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this StatusesShow Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Tweets_StatusesShow_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this StatusesShow Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Tweets_StatusesShow_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this StatusesShow Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Tweets_StatusesShow_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this StatusesShow Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Tweets_StatusesShow_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ID input for this StatusesShow Choreo.
     *
     * @param string $value (required, string) The numerical ID of the desired Tweet.
     * @return Twitter_Tweets_StatusesShow_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this StatusesShow Choreo.
     *
     * @param bool $value (optional, boolean) The "entities" node containing extra metadata will not be included when set to false.
     * @return Twitter_Tweets_StatusesShow_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the IncludeMyRetweet input for this StatusesShow Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, any Tweets returned that have been retweeted by the authenticating user will include an additional current_user_retweet node, containing the ID of the source status for the retweet.
     * @return Twitter_Tweets_StatusesShow_Inputs For method chaining.
     */
    public function setIncludeMyRetweet($value)
    {
        return $this->set('IncludeMyRetweet', $value);
    }

    /**
     * Set the value for the TrimUser input for this StatusesShow Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, each tweet returned in a timeline will include a user object including only the status authors numerical ID. Defaults to false.
     * @return Twitter_Tweets_StatusesShow_Inputs For method chaining.
     */
    public function setTrimUser($value)
    {
        return $this->set('TrimUser', $value);
    }
}


/**
 * Execution object for the StatusesShow Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_StatusesShow_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the StatusesShow Choreo.
     *
     * @param Temboo_Session $session The session that owns this StatusesShow execution.
     * @param Twitter_Tweets_StatusesShow $choreo The choreography object for this execution.
     * @param Twitter_Tweets_StatusesShow_Inputs|array $inputs (optional) Inputs as Twitter_Tweets_StatusesShow_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Tweets_StatusesShow_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Tweets_StatusesShow $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this StatusesShow execution.
     *
     * @return Twitter_Tweets_StatusesShow_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this StatusesShow execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Tweets_StatusesShow_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Tweets_StatusesShow_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the StatusesShow Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_StatusesShow_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the StatusesShow Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Tweets_StatusesShow_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this StatusesShow execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Response" output from this StatusesShow execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Reset" output from this StatusesShow execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
    /**
     * Retrieve the value for the "Remaining" output from this StatusesShow execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Verifies that the specified user is a subscriber of the specified list.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_ShowSubscriber extends Temboo_Choreography
{
    /**
     * Verifies that the specified user is a subscriber of the specified list.
     *
     * @param Temboo_Session $session The session that owns this ShowSubscriber Choreo.
     * @return Twitter_Lists_ShowSubscriber New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Lists/ShowSubscriber/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ShowSubscriber Choreo.
     *
     * @param Twitter_Lists_ShowSubscriber_Inputs|array $inputs (optional) Inputs as Twitter_Lists_ShowSubscriber_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Lists_ShowSubscriber_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Lists_ShowSubscriber_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ShowSubscriber Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Lists_ShowSubscriber_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Lists_ShowSubscriber_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ShowSubscriber Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_ShowSubscriber_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ShowSubscriber Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Lists_ShowSubscriber_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ShowSubscriber input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Lists_ShowSubscriber_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Lists_ShowSubscriber_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this ShowSubscriber Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Lists_ShowSubscriber_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this ShowSubscriber Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Lists_ShowSubscriber_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this ShowSubscriber Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Lists_ShowSubscriber_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this ShowSubscriber Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Lists_ShowSubscriber_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this ShowSubscriber Choreo.
     *
     * @param bool $value (optional, boolean) The "entities" node containing extra metadata will not be included when set to false.
     * @return Twitter_Lists_ShowSubscriber_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the ListId input for this ShowSubscriber Choreo.
     *
     * @param string $value (conditional, string) The numerical ID of the list. Required unless Slug is provided.
     * @return Twitter_Lists_ShowSubscriber_Inputs For method chaining.
     */
    public function setListId($value)
    {
        return $this->set('ListId', $value);
    }

    /**
     * Set the value for the OwnerId input for this ShowSubscriber Choreo.
     *
     * @param string $value (optional, string) The user ID of the user who owns the list being requested by a slug.
     * @return Twitter_Lists_ShowSubscriber_Inputs For method chaining.
     */
    public function setOwnerId($value)
    {
        return $this->set('OwnerId', $value);
    }

    /**
     * Set the value for the OwnerScreenName input for this ShowSubscriber Choreo.
     *
     * @param string $value (optional, string) The screen name of the user who owns the list being requested by a slug.
     * @return Twitter_Lists_ShowSubscriber_Inputs For method chaining.
     */
    public function setOwnerScreenName($value)
    {
        return $this->set('OwnerScreenName', $value);
    }

    /**
     * Set the value for the ScreenName input for this ShowSubscriber Choreo.
     *
     * @param string $value (conditional, string) The screen name of the user to retrieve from the list. Required unless providing the UserId.
     * @return Twitter_Lists_ShowSubscriber_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the SkipStatus input for this ShowSubscriber Choreo.
     *
     * @param bool $value (optional, boolean) When set to either true, statuses will not be included in the returned user objects.
     * @return Twitter_Lists_ShowSubscriber_Inputs For method chaining.
     */
    public function setSkipStatus($value)
    {
        return $this->set('SkipStatus', $value);
    }

    /**
     * Set the value for the Slug input for this ShowSubscriber Choreo.
     *
     * @param string $value (optional, string) When identifying a list by a slug, either OwnerScreenName or OwnerId must be provided.
     * @return Twitter_Lists_ShowSubscriber_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }

    /**
     * Set the value for the UserId input for this ShowSubscriber Choreo.
     *
     * @param string $value (conditional, string) The ID of the user to retrieve from the list. Required unless providing the ScreenName.
     * @return Twitter_Lists_ShowSubscriber_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the ShowSubscriber Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_ShowSubscriber_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ShowSubscriber Choreo.
     *
     * @param Temboo_Session $session The session that owns this ShowSubscriber execution.
     * @param Twitter_Lists_ShowSubscriber $choreo The choreography object for this execution.
     * @param Twitter_Lists_ShowSubscriber_Inputs|array $inputs (optional) Inputs as Twitter_Lists_ShowSubscriber_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Lists_ShowSubscriber_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Lists_ShowSubscriber $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ShowSubscriber execution.
     *
     * @return Twitter_Lists_ShowSubscriber_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this ShowSubscriber execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Lists_ShowSubscriber_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Lists_ShowSubscriber_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ShowSubscriber Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_ShowSubscriber_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ShowSubscriber Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Lists_ShowSubscriber_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this ShowSubscriber execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this ShowSubscriber execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Reset" output from this ShowSubscriber execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
    /**
     * Retrieve the value for the "Response" output from this ShowSubscriber execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the relationship of the authenticating user to the comma-separated list of up to 100 screen names or user IDs provided.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_FriendshipsLookup extends Temboo_Choreography
{
    /**
     * Retrieves the relationship of the authenticating user to the comma-separated list of up to 100 screen names or user IDs provided.
     *
     * @param Temboo_Session $session The session that owns this FriendshipsLookup Choreo.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/FriendsAndFollowers/FriendshipsLookup/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FriendshipsLookup Choreo.
     *
     * @param Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_FriendsAndFollowers_FriendshipsLookup_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FriendshipsLookup Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FriendshipsLookup Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FriendshipsLookup Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FriendshipsLookup input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this FriendshipsLookup Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this FriendshipsLookup Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this FriendshipsLookup Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this FriendshipsLookup Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ScreenName input for this FriendshipsLookup Choreo.
     *
     * @param string $value (conditional, string) A comma separated list of screen names. Up to 100 are allowed. Required unless UserID is specified.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the UserID input for this FriendshipsLookup Choreo.
     *
     * @param string $value (conditional, string) A comma separated list of user IDs. Up to 100 are allowed. Required unless ScreenName is specified.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the FriendshipsLookup Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_FriendshipsLookup_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FriendshipsLookup Choreo.
     *
     * @param Temboo_Session $session The session that owns this FriendshipsLookup execution.
     * @param Twitter_FriendsAndFollowers_FriendshipsLookup $choreo The choreography object for this execution.
     * @param Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_FriendsAndFollowers_FriendshipsLookup $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FriendshipsLookup execution.
     *
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this FriendshipsLookup execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_FriendsAndFollowers_FriendshipsLookup_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FriendshipsLookup Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_FriendshipsLookup_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FriendshipsLookup Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FriendshipsLookup execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Reset" output from this FriendshipsLookup execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
    /**
     * Retrieve the value for the "Remaining" output from this FriendshipsLookup execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Limit" output from this FriendshipsLookup execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
}

/**
 * Sends a new direct message to the specified user from the authenticating user.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_SendDirectMessage extends Temboo_Choreography
{
    /**
     * Sends a new direct message to the specified user from the authenticating user.
     *
     * @param Temboo_Session $session The session that owns this SendDirectMessage Choreo.
     * @return Twitter_DirectMessages_SendDirectMessage New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/DirectMessages/SendDirectMessage/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SendDirectMessage Choreo.
     *
     * @param Twitter_DirectMessages_SendDirectMessage_Inputs|array $inputs (optional) Inputs as Twitter_DirectMessages_SendDirectMessage_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_DirectMessages_SendDirectMessage_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_DirectMessages_SendDirectMessage_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SendDirectMessage Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_DirectMessages_SendDirectMessage_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_DirectMessages_SendDirectMessage_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SendDirectMessage Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_SendDirectMessage_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SendDirectMessage Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_DirectMessages_SendDirectMessage_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SendDirectMessage input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_DirectMessages_SendDirectMessage_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_DirectMessages_SendDirectMessage_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this SendDirectMessage Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_DirectMessages_SendDirectMessage_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this SendDirectMessage Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_DirectMessages_SendDirectMessage_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this SendDirectMessage Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_DirectMessages_SendDirectMessage_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this SendDirectMessage Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_DirectMessages_SendDirectMessage_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ScreenName input for this SendDirectMessage Choreo.
     *
     * @param string $value (conditional, string) The screen name of the user who should receive the direct message. Required unless specifying the UserId.
     * @return Twitter_DirectMessages_SendDirectMessage_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the Text input for this SendDirectMessage Choreo.
     *
     * @param string $value (required, string) The text for the direct message. Max characters is 140.
     * @return Twitter_DirectMessages_SendDirectMessage_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }

    /**
     * Set the value for the UserID input for this SendDirectMessage Choreo.
     *
     * @param string $value (conditional, string) The ID of the user who should receive the direct message. Required unless specifying the ScreenName.
     * @return Twitter_DirectMessages_SendDirectMessage_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the SendDirectMessage Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_SendDirectMessage_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SendDirectMessage Choreo.
     *
     * @param Temboo_Session $session The session that owns this SendDirectMessage execution.
     * @param Twitter_DirectMessages_SendDirectMessage $choreo The choreography object for this execution.
     * @param Twitter_DirectMessages_SendDirectMessage_Inputs|array $inputs (optional) Inputs as Twitter_DirectMessages_SendDirectMessage_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_DirectMessages_SendDirectMessage_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_DirectMessages_SendDirectMessage $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SendDirectMessage execution.
     *
     * @return Twitter_DirectMessages_SendDirectMessage_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this SendDirectMessage execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_DirectMessages_SendDirectMessage_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_DirectMessages_SendDirectMessage_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SendDirectMessage Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_SendDirectMessage_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SendDirectMessage Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_DirectMessages_SendDirectMessage_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SendDirectMessage execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves up to 100 of the first retweets of a given tweet.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_GetRetweets extends Temboo_Choreography
{
    /**
     * Retrieves up to 100 of the first retweets of a given tweet.
     *
     * @param Temboo_Session $session The session that owns this GetRetweets Choreo.
     * @return Twitter_Tweets_GetRetweets New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Tweets/GetRetweets/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetRetweets Choreo.
     *
     * @param Twitter_Tweets_GetRetweets_Inputs|array $inputs (optional) Inputs as Twitter_Tweets_GetRetweets_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Tweets_GetRetweets_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Tweets_GetRetweets_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetRetweets Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Tweets_GetRetweets_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Tweets_GetRetweets_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetRetweets Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_GetRetweets_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetRetweets Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Tweets_GetRetweets_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetRetweets input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Tweets_GetRetweets_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Tweets_GetRetweets_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetRetweets Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Tweets_GetRetweets_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetRetweets Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Tweets_GetRetweets_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetRetweets Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Tweets_GetRetweets_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetRetweets Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Tweets_GetRetweets_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Count input for this GetRetweets Choreo.
     *
     * @param int $value (optional, integer) Specifies the number of records to, up to a maximum of 100.
     * @return Twitter_Tweets_GetRetweets_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the ID input for this GetRetweets Choreo.
     *
     * @param string $value (required, string) The numerical ID of the tweet to retrieve retweets for.
     * @return Twitter_Tweets_GetRetweets_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the TrimUser input for this GetRetweets Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, each tweet returned in a timeline will include a user object including only the status authors numerical ID.
     * @return Twitter_Tweets_GetRetweets_Inputs For method chaining.
     */
    public function setTrimUser($value)
    {
        return $this->set('TrimUser', $value);
    }
}


/**
 * Execution object for the GetRetweets Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_GetRetweets_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetRetweets Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetRetweets execution.
     * @param Twitter_Tweets_GetRetweets $choreo The choreography object for this execution.
     * @param Twitter_Tweets_GetRetweets_Inputs|array $inputs (optional) Inputs as Twitter_Tweets_GetRetweets_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Tweets_GetRetweets_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Tweets_GetRetweets $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetRetweets execution.
     *
     * @return Twitter_Tweets_GetRetweets_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetRetweets execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Tweets_GetRetweets_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Tweets_GetRetweets_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetRetweets Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_GetRetweets_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetRetweets Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Tweets_GetRetweets_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetRetweets execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Reset" output from this GetRetweets execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
    /**
     * Retrieve the value for the "Remaining" output from this GetRetweets execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Limit" output from this GetRetweets execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
}

/**
 * Retrieves a collection of up to 100 user IDs belonging to users who have retweeted the specified tweet.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_GetRetweeters extends Temboo_Choreography
{
    /**
     * Retrieves a collection of up to 100 user IDs belonging to users who have retweeted the specified tweet.
     *
     * @param Temboo_Session $session The session that owns this GetRetweeters Choreo.
     * @return Twitter_Tweets_GetRetweeters New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Tweets/GetRetweeters/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetRetweeters Choreo.
     *
     * @param Twitter_Tweets_GetRetweeters_Inputs|array $inputs (optional) Inputs as Twitter_Tweets_GetRetweeters_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Tweets_GetRetweeters_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Tweets_GetRetweeters_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetRetweeters Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Tweets_GetRetweeters_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Tweets_GetRetweeters_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetRetweeters Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_GetRetweeters_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetRetweeters Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Tweets_GetRetweeters_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetRetweeters input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Tweets_GetRetweeters_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Tweets_GetRetweeters_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetRetweeters Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Tweets_GetRetweeters_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetRetweeters Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Tweets_GetRetweeters_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetRetweeters Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Tweets_GetRetweeters_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetRetweeters Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Tweets_GetRetweeters_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Cursor input for this GetRetweeters Choreo.
     *
     * @param int $value (optional, integer) Allows you to pass in the previous_cursor or next_cursor in order to page through results.
     * @return Twitter_Tweets_GetRetweeters_Inputs For method chaining.
     */
    public function setCursor($value)
    {
        return $this->set('Cursor', $value);
    }

    /**
     * Set the value for the ID input for this GetRetweeters Choreo.
     *
     * @param string $value (required, string) The numerical ID of the desired status.
     * @return Twitter_Tweets_GetRetweeters_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the StringifyIDs input for this GetRetweeters Choreo.
     *
     * @param bool $value (optional, boolean) A boolean flag indicating that IDs should be returned as strings.
     * @return Twitter_Tweets_GetRetweeters_Inputs For method chaining.
     */
    public function setStringifyIDs($value)
    {
        return $this->set('StringifyIDs', $value);
    }
}


/**
 * Execution object for the GetRetweeters Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_GetRetweeters_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetRetweeters Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetRetweeters execution.
     * @param Twitter_Tweets_GetRetweeters $choreo The choreography object for this execution.
     * @param Twitter_Tweets_GetRetweeters_Inputs|array $inputs (optional) Inputs as Twitter_Tweets_GetRetweeters_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Tweets_GetRetweeters_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Tweets_GetRetweeters $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetRetweeters execution.
     *
     * @return Twitter_Tweets_GetRetweeters_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetRetweeters execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Tweets_GetRetweeters_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Tweets_GetRetweeters_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetRetweeters Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_GetRetweeters_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetRetweeters Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Tweets_GetRetweeters_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Reset" output from this GetRetweeters execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
    /**
     * Retrieve the value for the "Remaining" output from this GetRetweeters execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this GetRetweeters execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Limit" output from this GetRetweeters execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
}

/**
 * Retrieves all lists the authenticating or specified user subscribes to, including lists that they own.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_GetLists extends Temboo_Choreography
{
    /**
     * Retrieves all lists the authenticating or specified user subscribes to, including lists that they own.
     *
     * @param Temboo_Session $session The session that owns this GetLists Choreo.
     * @return Twitter_Lists_GetLists New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Lists/GetLists/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetLists Choreo.
     *
     * @param Twitter_Lists_GetLists_Inputs|array $inputs (optional) Inputs as Twitter_Lists_GetLists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Lists_GetLists_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Lists_GetLists_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetLists Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Lists_GetLists_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Lists_GetLists_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetLists Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_GetLists_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetLists Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Lists_GetLists_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetLists input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Lists_GetLists_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Lists_GetLists_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetLists Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Lists_GetLists_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetLists Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Lists_GetLists_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetLists Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Lists_GetLists_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetLists Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Lists_GetLists_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Reverse input for this GetLists Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, owned lists will be returned first in the response.
     * @return Twitter_Lists_GetLists_Inputs For method chaining.
     */
    public function setReverse($value)
    {
        return $this->set('Reverse', $value);
    }

    /**
     * Set the value for the ScreenName input for this GetLists Choreo.
     *
     * @param string $value (optional, string) The screen name of the user for whom to return results for. If not provided, the subscriptions for the authenticating user are returned.
     * @return Twitter_Lists_GetLists_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the UserId input for this GetLists Choreo.
     *
     * @param string $value (optional, string) The ID of the user for whom to return results for. If not provided, the subscriptions for the authenticating user are returned.
     * @return Twitter_Lists_GetLists_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the GetLists Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_GetLists_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetLists Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetLists execution.
     * @param Twitter_Lists_GetLists $choreo The choreography object for this execution.
     * @param Twitter_Lists_GetLists_Inputs|array $inputs (optional) Inputs as Twitter_Lists_GetLists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Lists_GetLists_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Lists_GetLists $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetLists execution.
     *
     * @return Twitter_Lists_GetLists_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetLists execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Lists_GetLists_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Lists_GetLists_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetLists Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_GetLists_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetLists Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Lists_GetLists_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Remaining" output from this GetLists execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Reset" output from this GetLists execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
    /**
     * Retrieve the value for the "Limit" output from this GetLists execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Response" output from this GetLists execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the list of suggested user categories.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_SuggestedUsers_GetUserCategories extends Temboo_Choreography
{
    /**
     * Retrieves the list of suggested user categories.
     *
     * @param Temboo_Session $session The session that owns this GetUserCategories Choreo.
     * @return Twitter_SuggestedUsers_GetUserCategories New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/SuggestedUsers/GetUserCategories/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetUserCategories Choreo.
     *
     * @param Twitter_SuggestedUsers_GetUserCategories_Inputs|array $inputs (optional) Inputs as Twitter_SuggestedUsers_GetUserCategories_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_SuggestedUsers_GetUserCategories_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_SuggestedUsers_GetUserCategories_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetUserCategories Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_SuggestedUsers_GetUserCategories_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_SuggestedUsers_GetUserCategories_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetUserCategories Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_SuggestedUsers_GetUserCategories_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetUserCategories Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_SuggestedUsers_GetUserCategories_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetUserCategories input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_SuggestedUsers_GetUserCategories_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_SuggestedUsers_GetUserCategories_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetUserCategories Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_SuggestedUsers_GetUserCategories_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetUserCategories Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_SuggestedUsers_GetUserCategories_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetUserCategories Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_SuggestedUsers_GetUserCategories_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetUserCategories Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_SuggestedUsers_GetUserCategories_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Language input for this GetUserCategories Choreo.
     *
     * @param string $value (optional, string) Restricts the suggested categories to the requested language. The language must be specified by the appropriate two letter ISO 639-1 code (e.g., en). 
     * @return Twitter_SuggestedUsers_GetUserCategories_Inputs For method chaining.
     */
    public function setLanguage($value)
    {
        return $this->set('Language', $value);
    }
}


/**
 * Execution object for the GetUserCategories Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_SuggestedUsers_GetUserCategories_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetUserCategories Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetUserCategories execution.
     * @param Twitter_SuggestedUsers_GetUserCategories $choreo The choreography object for this execution.
     * @param Twitter_SuggestedUsers_GetUserCategories_Inputs|array $inputs (optional) Inputs as Twitter_SuggestedUsers_GetUserCategories_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_SuggestedUsers_GetUserCategories_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_SuggestedUsers_GetUserCategories $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetUserCategories execution.
     *
     * @return Twitter_SuggestedUsers_GetUserCategories_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetUserCategories execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_SuggestedUsers_GetUserCategories_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_SuggestedUsers_GetUserCategories_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetUserCategories Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_SuggestedUsers_GetUserCategories_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetUserCategories Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_SuggestedUsers_GetUserCategories_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Reset" output from this GetUserCategories execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
    /**
     * Retrieve the value for the "Limit" output from this GetUserCategories execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this GetUserCategories execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this GetUserCategories execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Marks a specified status as a favorite.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Favorites_CreateFavorite extends Temboo_Choreography
{
    /**
     * Marks a specified status as a favorite.
     *
     * @param Temboo_Session $session The session that owns this CreateFavorite Choreo.
     * @return Twitter_Favorites_CreateFavorite New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Favorites/CreateFavorite/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateFavorite Choreo.
     *
     * @param Twitter_Favorites_CreateFavorite_Inputs|array $inputs (optional) Inputs as Twitter_Favorites_CreateFavorite_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Favorites_CreateFavorite_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Favorites_CreateFavorite_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateFavorite Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Favorites_CreateFavorite_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Favorites_CreateFavorite_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateFavorite Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Favorites_CreateFavorite_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateFavorite Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Favorites_CreateFavorite_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateFavorite input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Favorites_CreateFavorite_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Favorites_CreateFavorite_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this CreateFavorite Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Favorites_CreateFavorite_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this CreateFavorite Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Favorites_CreateFavorite_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this CreateFavorite Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Favorites_CreateFavorite_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this CreateFavorite Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Favorites_CreateFavorite_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ID input for this CreateFavorite Choreo.
     *
     * @param string $value (required, string) The ID of the status to favorite.
     * @return Twitter_Favorites_CreateFavorite_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this CreateFavorite Choreo.
     *
     * @param bool $value (optional, boolean) The "entities" node containing extra metadata will not be included when set to false.
     * @return Twitter_Favorites_CreateFavorite_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }
}


/**
 * Execution object for the CreateFavorite Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Favorites_CreateFavorite_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateFavorite Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateFavorite execution.
     * @param Twitter_Favorites_CreateFavorite $choreo The choreography object for this execution.
     * @param Twitter_Favorites_CreateFavorite_Inputs|array $inputs (optional) Inputs as Twitter_Favorites_CreateFavorite_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Favorites_CreateFavorite_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Favorites_CreateFavorite $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateFavorite execution.
     *
     * @return Twitter_Favorites_CreateFavorite_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this CreateFavorite execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Favorites_CreateFavorite_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Favorites_CreateFavorite_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateFavorite Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Favorites_CreateFavorite_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateFavorite Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Favorites_CreateFavorite_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateFavorite execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes the specified list.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_DestroyList extends Temboo_Choreography
{
    /**
     * Deletes the specified list.
     *
     * @param Temboo_Session $session The session that owns this DestroyList Choreo.
     * @return Twitter_Lists_DestroyList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Lists/DestroyList/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DestroyList Choreo.
     *
     * @param Twitter_Lists_DestroyList_Inputs|array $inputs (optional) Inputs as Twitter_Lists_DestroyList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Lists_DestroyList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Lists_DestroyList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DestroyList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Lists_DestroyList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Lists_DestroyList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DestroyList Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_DestroyList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DestroyList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Lists_DestroyList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DestroyList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Lists_DestroyList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Lists_DestroyList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this DestroyList Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Lists_DestroyList_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this DestroyList Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Lists_DestroyList_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this DestroyList Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Lists_DestroyList_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this DestroyList Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Lists_DestroyList_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ListId input for this DestroyList Choreo.
     *
     * @param string $value (conditional, string) The numerical ID of the list. Required unless Slug is provided.
     * @return Twitter_Lists_DestroyList_Inputs For method chaining.
     */
    public function setListId($value)
    {
        return $this->set('ListId', $value);
    }

    /**
     * Set the value for the OwnerId input for this DestroyList Choreo.
     *
     * @param string $value (optional, string) The user ID of the user who owns the list being requested by a slug.
     * @return Twitter_Lists_DestroyList_Inputs For method chaining.
     */
    public function setOwnerId($value)
    {
        return $this->set('OwnerId', $value);
    }

    /**
     * Set the value for the OwnerScreenName input for this DestroyList Choreo.
     *
     * @param string $value (optional, string) The screen name of the user who owns the list being requested by a slug.
     * @return Twitter_Lists_DestroyList_Inputs For method chaining.
     */
    public function setOwnerScreenName($value)
    {
        return $this->set('OwnerScreenName', $value);
    }

    /**
     * Set the value for the Slug input for this DestroyList Choreo.
     *
     * @param string $value (optional, string) When identifying a list by a slug, either OwnerScreenName or OwnerId must be provided.
     * @return Twitter_Lists_DestroyList_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }
}


/**
 * Execution object for the DestroyList Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_DestroyList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DestroyList Choreo.
     *
     * @param Temboo_Session $session The session that owns this DestroyList execution.
     * @param Twitter_Lists_DestroyList $choreo The choreography object for this execution.
     * @param Twitter_Lists_DestroyList_Inputs|array $inputs (optional) Inputs as Twitter_Lists_DestroyList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Lists_DestroyList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Lists_DestroyList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DestroyList execution.
     *
     * @return Twitter_Lists_DestroyList_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this DestroyList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Lists_DestroyList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Lists_DestroyList_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DestroyList Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_DestroyList_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DestroyList Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Lists_DestroyList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DestroyList execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specified Direct Message.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_DestroyDirectMessage extends Temboo_Choreography
{
    /**
     * Deletes a specified Direct Message.
     *
     * @param Temboo_Session $session The session that owns this DestroyDirectMessage Choreo.
     * @return Twitter_DirectMessages_DestroyDirectMessage New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/DirectMessages/DestroyDirectMessage/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DestroyDirectMessage Choreo.
     *
     * @param Twitter_DirectMessages_DestroyDirectMessage_Inputs|array $inputs (optional) Inputs as Twitter_DirectMessages_DestroyDirectMessage_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_DirectMessages_DestroyDirectMessage_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DestroyDirectMessage Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_DirectMessages_DestroyDirectMessage_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DestroyDirectMessage Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_DestroyDirectMessage_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DestroyDirectMessage Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DestroyDirectMessage input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this DestroyDirectMessage Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this DestroyDirectMessage Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this DestroyDirectMessage Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this DestroyDirectMessage Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ID input for this DestroyDirectMessage Choreo.
     *
     * @param string $value (required, string) The ID of the direct message.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this DestroyDirectMessage Choreo.
     *
     * @param bool $value (optional, boolean) The "entities" node containing extra metadata will not be included when set to false.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }
}


/**
 * Execution object for the DestroyDirectMessage Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_DestroyDirectMessage_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DestroyDirectMessage Choreo.
     *
     * @param Temboo_Session $session The session that owns this DestroyDirectMessage execution.
     * @param Twitter_DirectMessages_DestroyDirectMessage $choreo The choreography object for this execution.
     * @param Twitter_DirectMessages_DestroyDirectMessage_Inputs|array $inputs (optional) Inputs as Twitter_DirectMessages_DestroyDirectMessage_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_DirectMessages_DestroyDirectMessage $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DestroyDirectMessage execution.
     *
     * @return Twitter_DirectMessages_DestroyDirectMessage_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this DestroyDirectMessage execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_DirectMessages_DestroyDirectMessage_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DestroyDirectMessage Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_DestroyDirectMessage_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DestroyDirectMessage Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DestroyDirectMessage execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Searches for places that can be attached to a statuses/update using a latitude and a longitude pair, an IP address, or a name.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_GetPlaceInformation extends Temboo_Choreography
{
    /**
     * Searches for places that can be attached to a statuses/update using a latitude and a longitude pair, an IP address, or a name.
     *
     * @param Temboo_Session $session The session that owns this GetPlaceInformation Choreo.
     * @return Twitter_PlacesAndGeo_GetPlaceInformation New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/PlacesAndGeo/GetPlaceInformation/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetPlaceInformation Choreo.
     *
     * @param Twitter_PlacesAndGeo_GetPlaceInformation_Inputs|array $inputs (optional) Inputs as Twitter_PlacesAndGeo_GetPlaceInformation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_PlacesAndGeo_GetPlaceInformation_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_PlacesAndGeo_GetPlaceInformation_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetPlaceInformation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_PlacesAndGeo_GetPlaceInformation_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_PlacesAndGeo_GetPlaceInformation_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetPlaceInformation Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_GetPlaceInformation_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetPlaceInformation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_PlacesAndGeo_GetPlaceInformation_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetPlaceInformation input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_PlacesAndGeo_GetPlaceInformation_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_PlacesAndGeo_GetPlaceInformation_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetPlaceInformation Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_PlacesAndGeo_GetPlaceInformation_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetPlaceInformation Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_PlacesAndGeo_GetPlaceInformation_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetPlaceInformation Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_PlacesAndGeo_GetPlaceInformation_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetPlaceInformation Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_PlacesAndGeo_GetPlaceInformation_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the PlaceId input for this GetPlaceInformation Choreo.
     *
     * @param string $value (required, string) The id for a place in the world. These IDs can be retrieved from the ReverseGeocode Choreo.
     * @return Twitter_PlacesAndGeo_GetPlaceInformation_Inputs For method chaining.
     */
    public function setPlaceId($value)
    {
        return $this->set('PlaceId', $value);
    }
}


/**
 * Execution object for the GetPlaceInformation Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_GetPlaceInformation_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetPlaceInformation Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetPlaceInformation execution.
     * @param Twitter_PlacesAndGeo_GetPlaceInformation $choreo The choreography object for this execution.
     * @param Twitter_PlacesAndGeo_GetPlaceInformation_Inputs|array $inputs (optional) Inputs as Twitter_PlacesAndGeo_GetPlaceInformation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_PlacesAndGeo_GetPlaceInformation_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_PlacesAndGeo_GetPlaceInformation $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetPlaceInformation execution.
     *
     * @return Twitter_PlacesAndGeo_GetPlaceInformation_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetPlaceInformation execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_PlacesAndGeo_GetPlaceInformation_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_PlacesAndGeo_GetPlaceInformation_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetPlaceInformation Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_GetPlaceInformation_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetPlaceInformation Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_PlacesAndGeo_GetPlaceInformation_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetPlaceInformation execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Remaining" output from this GetPlaceInformation execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Reset" output from this GetPlaceInformation execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
    /**
     * Retrieve the value for the "Limit" output from this GetPlaceInformation execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
}

/**
 * Retrieves a single direct message, specified by an id.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_GetMessageByID extends Temboo_Choreography
{
    /**
     * Retrieves a single direct message, specified by an id.
     *
     * @param Temboo_Session $session The session that owns this GetMessageByID Choreo.
     * @return Twitter_DirectMessages_GetMessageByID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/DirectMessages/GetMessageByID/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetMessageByID Choreo.
     *
     * @param Twitter_DirectMessages_GetMessageByID_Inputs|array $inputs (optional) Inputs as Twitter_DirectMessages_GetMessageByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_DirectMessages_GetMessageByID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_DirectMessages_GetMessageByID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetMessageByID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_DirectMessages_GetMessageByID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_DirectMessages_GetMessageByID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetMessageByID Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_GetMessageByID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetMessageByID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_DirectMessages_GetMessageByID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetMessageByID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_DirectMessages_GetMessageByID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_DirectMessages_GetMessageByID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetMessageByID Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_DirectMessages_GetMessageByID_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetMessageByID Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_DirectMessages_GetMessageByID_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetMessageByID Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_DirectMessages_GetMessageByID_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetMessageByID Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_DirectMessages_GetMessageByID_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ID input for this GetMessageByID Choreo.
     *
     * @param string $value (required, string) The ID of the direct message.
     * @return Twitter_DirectMessages_GetMessageByID_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }
}


/**
 * Execution object for the GetMessageByID Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_GetMessageByID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetMessageByID Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetMessageByID execution.
     * @param Twitter_DirectMessages_GetMessageByID $choreo The choreography object for this execution.
     * @param Twitter_DirectMessages_GetMessageByID_Inputs|array $inputs (optional) Inputs as Twitter_DirectMessages_GetMessageByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_DirectMessages_GetMessageByID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_DirectMessages_GetMessageByID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetMessageByID execution.
     *
     * @return Twitter_DirectMessages_GetMessageByID_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetMessageByID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_DirectMessages_GetMessageByID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_DirectMessages_GetMessageByID_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetMessageByID Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_GetMessageByID_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetMessageByID Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_DirectMessages_GetMessageByID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this GetMessageByID execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this GetMessageByID execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this GetMessageByID execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Reset" output from this GetMessageByID execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
}

/**
 * Retrieves locations closest to a specified location that Twitter has trending topic info for.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Trends_Closest extends Temboo_Choreography
{
    /**
     * Retrieves locations closest to a specified location that Twitter has trending topic info for.
     *
     * @param Temboo_Session $session The session that owns this Closest Choreo.
     * @return Twitter_Trends_Closest New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Trends/Closest/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Closest Choreo.
     *
     * @param Twitter_Trends_Closest_Inputs|array $inputs (optional) Inputs as Twitter_Trends_Closest_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Trends_Closest_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Trends_Closest_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Closest Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Trends_Closest_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Trends_Closest_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Closest Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Trends_Closest_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Closest Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Trends_Closest_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Closest input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Trends_Closest_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Trends_Closest_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this Closest Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Trends_Closest_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this Closest Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Trends_Closest_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this Closest Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Trends_Closest_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this Closest Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Trends_Closest_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Latitude input for this Closest Choreo.
     *
     * @param float $value (required, decimal) The latitude coordinate of the location.
     * @return Twitter_Trends_Closest_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this Closest Choreo.
     *
     * @param float $value (required, decimal) The longitude coordinate of the location.
     * @return Twitter_Trends_Closest_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }
}


/**
 * Execution object for the Closest Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Trends_Closest_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Closest Choreo.
     *
     * @param Temboo_Session $session The session that owns this Closest execution.
     * @param Twitter_Trends_Closest $choreo The choreography object for this execution.
     * @param Twitter_Trends_Closest_Inputs|array $inputs (optional) Inputs as Twitter_Trends_Closest_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Trends_Closest_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Trends_Closest $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Closest execution.
     *
     * @return Twitter_Trends_Closest_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Closest execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Trends_Closest_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Trends_Closest_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Closest Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Trends_Closest_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Closest Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Trends_Closest_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Remaining" output from this Closest execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this Closest execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Reset" output from this Closest execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
    /**
     * Retrieve the value for the "Limit" output from this Closest execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
}

/**
 * Retrieves users in a given category of the Twitter suggested user list.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_SuggestedUsers_GetSuggestedUsers extends Temboo_Choreography
{
    /**
     * Retrieves users in a given category of the Twitter suggested user list.
     *
     * @param Temboo_Session $session The session that owns this GetSuggestedUsers Choreo.
     * @return Twitter_SuggestedUsers_GetSuggestedUsers New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/SuggestedUsers/GetSuggestedUsers/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetSuggestedUsers Choreo.
     *
     * @param Twitter_SuggestedUsers_GetSuggestedUsers_Inputs|array $inputs (optional) Inputs as Twitter_SuggestedUsers_GetSuggestedUsers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_SuggestedUsers_GetSuggestedUsers_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_SuggestedUsers_GetSuggestedUsers_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetSuggestedUsers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_SuggestedUsers_GetSuggestedUsers_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_SuggestedUsers_GetSuggestedUsers_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetSuggestedUsers Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_SuggestedUsers_GetSuggestedUsers_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetSuggestedUsers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_SuggestedUsers_GetSuggestedUsers_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetSuggestedUsers input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_SuggestedUsers_GetSuggestedUsers_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_SuggestedUsers_GetSuggestedUsers_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetSuggestedUsers Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_SuggestedUsers_GetSuggestedUsers_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetSuggestedUsers Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_SuggestedUsers_GetSuggestedUsers_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetSuggestedUsers Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_SuggestedUsers_GetSuggestedUsers_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetSuggestedUsers Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_SuggestedUsers_GetSuggestedUsers_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Language input for this GetSuggestedUsers Choreo.
     *
     * @param string $value (optional, string) Restricts the suggested categories to the requested language. The language must be specified by the appropriate two letter ISO 639-1 code (e.g., en).
     * @return Twitter_SuggestedUsers_GetSuggestedUsers_Inputs For method chaining.
     */
    public function setLanguage($value)
    {
        return $this->set('Language', $value);
    }

    /**
     * Set the value for the Members input for this GetSuggestedUsers Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, makes a request to users/suggestions/:slug/members and retrieves the most recent statuses for users that are not protected.
     * @return Twitter_SuggestedUsers_GetSuggestedUsers_Inputs For method chaining.
     */
    public function setMembers($value)
    {
        return $this->set('Members', $value);
    }

    /**
     * Set the value for the Slug input for this GetSuggestedUsers Choreo.
     *
     * @param string $value (required, string) The short name of  the category (e.g., news, technology, government). These are returned in the response of the GetSuggestedCategories Choreo.
     * @return Twitter_SuggestedUsers_GetSuggestedUsers_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }
}


/**
 * Execution object for the GetSuggestedUsers Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_SuggestedUsers_GetSuggestedUsers_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetSuggestedUsers Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetSuggestedUsers execution.
     * @param Twitter_SuggestedUsers_GetSuggestedUsers $choreo The choreography object for this execution.
     * @param Twitter_SuggestedUsers_GetSuggestedUsers_Inputs|array $inputs (optional) Inputs as Twitter_SuggestedUsers_GetSuggestedUsers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_SuggestedUsers_GetSuggestedUsers_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_SuggestedUsers_GetSuggestedUsers $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetSuggestedUsers execution.
     *
     * @return Twitter_SuggestedUsers_GetSuggestedUsers_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetSuggestedUsers execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_SuggestedUsers_GetSuggestedUsers_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_SuggestedUsers_GetSuggestedUsers_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetSuggestedUsers Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_SuggestedUsers_GetSuggestedUsers_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetSuggestedUsers Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_SuggestedUsers_GetSuggestedUsers_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Remaining" output from this GetSuggestedUsers execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Limit" output from this GetSuggestedUsers execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Response" output from this GetSuggestedUsers execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Reset" output from this GetSuggestedUsers execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
}

/**
 * Allows you to search public user accounts on Twitter.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_Search extends Temboo_Choreography
{
    /**
     * Allows you to search public user accounts on Twitter.
     *
     * @param Temboo_Session $session The session that owns this Search Choreo.
     * @return Twitter_Users_Search New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Users/Search/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Search Choreo.
     *
     * @param Twitter_Users_Search_Inputs|array $inputs (optional) Inputs as Twitter_Users_Search_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Users_Search_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Users_Search_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Search Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Users_Search_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Users_Search_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Search Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_Search_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Search Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Users_Search_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Search input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Users_Search_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Users_Search_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this Search Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Users_Search_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this Search Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Users_Search_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this Search Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Users_Search_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this Search Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Users_Search_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Count input for this Search Choreo.
     *
     * @param int $value (optional, integer) The number of potential user results to retrieve per page. This value has a maximum of 20.
     * @return Twitter_Users_Search_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this Search Choreo.
     *
     * @param bool $value (optional, boolean) The "entities" node containing extra metadata will not be included when set to false.
     * @return Twitter_Users_Search_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the Page input for this Search Choreo.
     *
     * @param int $value (optional, integer) Specifies the page of results to retrieve.
     * @return Twitter_Users_Search_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the SearchString input for this Search Choreo.
     *
     * @param string $value (required, string) The string used to search for users.
     * @return Twitter_Users_Search_Inputs For method chaining.
     */
    public function setSearchString($value)
    {
        return $this->set('SearchString', $value);
    }
}


/**
 * Execution object for the Search Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_Search_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Search Choreo.
     *
     * @param Temboo_Session $session The session that owns this Search execution.
     * @param Twitter_Users_Search $choreo The choreography object for this execution.
     * @param Twitter_Users_Search_Inputs|array $inputs (optional) Inputs as Twitter_Users_Search_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Users_Search_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Users_Search $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Search execution.
     *
     * @return Twitter_Users_Search_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Search execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Users_Search_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Users_Search_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Search Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_Search_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Search Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Users_Search_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this Search execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Response" output from this Search execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Remaining" output from this Search execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Reset" output from this Search execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
}

/**
 * Retrieves a timeline of tweets posted by members of the specified list.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_GetStatuses extends Temboo_Choreography
{
    /**
     * Retrieves a timeline of tweets posted by members of the specified list.
     *
     * @param Temboo_Session $session The session that owns this GetStatuses Choreo.
     * @return Twitter_Lists_GetStatuses New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Lists/GetStatuses/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetStatuses Choreo.
     *
     * @param Twitter_Lists_GetStatuses_Inputs|array $inputs (optional) Inputs as Twitter_Lists_GetStatuses_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Lists_GetStatuses_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Lists_GetStatuses_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetStatuses Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Lists_GetStatuses_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Lists_GetStatuses_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetStatuses Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_GetStatuses_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetStatuses Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Lists_GetStatuses_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetStatuses input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Lists_GetStatuses_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Lists_GetStatuses_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetStatuses Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Lists_GetStatuses_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetStatuses Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Lists_GetStatuses_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetStatuses Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Lists_GetStatuses_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetStatuses Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Lists_GetStatuses_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Count input for this GetStatuses Choreo.
     *
     * @param int $value (optional, integer) Specifies the number of records to retrieve. Must be less than or equal to 200. Defaults to 20.
     * @return Twitter_Lists_GetStatuses_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the IncludeEntitities input for this GetStatuses Choreo.
     *
     * @param bool $value (optional, boolean) The "entities" node containing extra metadata will not be included when set to false.
     * @return Twitter_Lists_GetStatuses_Inputs For method chaining.
     */
    public function setIncludeEntitities($value)
    {
        return $this->set('IncludeEntitities', $value);
    }

    /**
     * Set the value for the IncludeRetweets input for this GetStatuses Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, the response will include retweets if they exist.
     * @return Twitter_Lists_GetStatuses_Inputs For method chaining.
     */
    public function setIncludeRetweets($value)
    {
        return $this->set('IncludeRetweets', $value);
    }

    /**
     * Set the value for the ListId input for this GetStatuses Choreo.
     *
     * @param string $value (conditional, string) The numerical ID of the list. Required unless Slug is provided.
     * @return Twitter_Lists_GetStatuses_Inputs For method chaining.
     */
    public function setListId($value)
    {
        return $this->set('ListId', $value);
    }

    /**
     * Set the value for the MaxId input for this GetStatuses Choreo.
     *
     * @param string $value (optional, string) Returns results with an ID less than (older than) or equal to the specified ID.
     * @return Twitter_Lists_GetStatuses_Inputs For method chaining.
     */
    public function setMaxId($value)
    {
        return $this->set('MaxId', $value);
    }

    /**
     * Set the value for the OwnerId input for this GetStatuses Choreo.
     *
     * @param string $value (optional, string) The user ID of the user who owns the list being requested by a slug.
     * @return Twitter_Lists_GetStatuses_Inputs For method chaining.
     */
    public function setOwnerId($value)
    {
        return $this->set('OwnerId', $value);
    }

    /**
     * Set the value for the OwnerScreenName input for this GetStatuses Choreo.
     *
     * @param string $value (optional, string) The screen name of the user who owns the list being requested by a slug.
     * @return Twitter_Lists_GetStatuses_Inputs For method chaining.
     */
    public function setOwnerScreenName($value)
    {
        return $this->set('OwnerScreenName', $value);
    }

    /**
     * Set the value for the SinceId input for this GetStatuses Choreo.
     *
     * @param string $value (optional, string) Returns results with an ID greater than (more recent than) the specified ID.
     * @return Twitter_Lists_GetStatuses_Inputs For method chaining.
     */
    public function setSinceId($value)
    {
        return $this->set('SinceId', $value);
    }

    /**
     * Set the value for the Slug input for this GetStatuses Choreo.
     *
     * @param string $value (optional, string) When identifying a list by a slug, either OwnerScreenName or OwnerId must be provided.
     * @return Twitter_Lists_GetStatuses_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }
}


/**
 * Execution object for the GetStatuses Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_GetStatuses_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetStatuses Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetStatuses execution.
     * @param Twitter_Lists_GetStatuses $choreo The choreography object for this execution.
     * @param Twitter_Lists_GetStatuses_Inputs|array $inputs (optional) Inputs as Twitter_Lists_GetStatuses_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Lists_GetStatuses_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Lists_GetStatuses $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetStatuses execution.
     *
     * @return Twitter_Lists_GetStatuses_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetStatuses execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Lists_GetStatuses_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Lists_GetStatuses_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetStatuses Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_GetStatuses_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetStatuses Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Lists_GetStatuses_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetStatuses execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Remaining" output from this GetStatuses execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Limit" output from this GetStatuses execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Reset" output from this GetStatuses execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
}

/**
 * Retrieves a collection of the most recent Tweets posted by the user whose screen_name or user_id is indicated.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_UserTimeline extends Temboo_Choreography
{
    /**
     * Retrieves a collection of the most recent Tweets posted by the user whose screen_name or user_id is indicated.
     *
     * @param Temboo_Session $session The session that owns this UserTimeline Choreo.
     * @return Twitter_Timelines_UserTimeline New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Timelines/UserTimeline/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UserTimeline Choreo.
     *
     * @param Twitter_Timelines_UserTimeline_Inputs|array $inputs (optional) Inputs as Twitter_Timelines_UserTimeline_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Timelines_UserTimeline_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Timelines_UserTimeline_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UserTimeline Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Timelines_UserTimeline_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Timelines_UserTimeline_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UserTimeline Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_UserTimeline_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UserTimeline Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Timelines_UserTimeline_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UserTimeline input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this UserTimeline Choreo.
     *
     * @param string $value (conditional, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this UserTimeline Choreo.
     *
     * @param string $value (conditional, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this UserTimeline Choreo.
     *
     * @param string $value (conditional, string) The Consumer Key provided by Twitter.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this UserTimeline Choreo.
     *
     * @param string $value (conditional, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ContributorDetails input for this UserTimeline Choreo.
     *
     * @param bool $value (optional, boolean) Set to true to include the screen_name of the contributor. By default only the user_id of the contributor is included.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setContributorDetails($value)
    {
        return $this->set('ContributorDetails', $value);
    }

    /**
     * Set the value for the Count input for this UserTimeline Choreo.
     *
     * @param int $value (optional, integer) Specifies the number of records to retrieve. Must be less than or equal to 200. Defaults to 20.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the ExcludeReplies input for this UserTimeline Choreo.
     *
     * @param bool $value (optional, boolean) Set to true to prevent replies from appearing in the returned timeline.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setExcludeReplies($value)
    {
        return $this->set('ExcludeReplies', $value);
    }

    /**
     * Set the value for the IncludeRetweets input for this UserTimeline Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, the response will include the "entities" node.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setIncludeRetweets($value)
    {
        return $this->set('IncludeRetweets', $value);
    }

    /**
     * Set the value for the MaxId input for this UserTimeline Choreo.
     *
     * @param string $value (optional, string) Returns results with an ID less than (older than) or equal to the specified ID.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setMaxId($value)
    {
        return $this->set('MaxId', $value);
    }

    /**
     * Set the value for the ScreenName input for this UserTimeline Choreo.
     *
     * @param string $value (conditional, string) Screen name of the user to return results for. Required unless providing the UserId.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the SinceId input for this UserTimeline Choreo.
     *
     * @param string $value (optional, string) Returns results with an ID greater than (more recent than) the specified ID.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setSinceId($value)
    {
        return $this->set('SinceId', $value);
    }

    /**
     * Set the value for the TrimUser input for this UserTimeline Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, each tweet returned in a timeline will include a user object including only the status authors numerical ID. Defaults to false.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setTrimUser($value)
    {
        return $this->set('TrimUser', $value);
    }

    /**
     * Set the value for the UserId input for this UserTimeline Choreo.
     *
     * @param string $value (conditional, string) ID of the user to return results for. Required unless providing the ScreenName.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the UserTimeline Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_UserTimeline_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UserTimeline Choreo.
     *
     * @param Temboo_Session $session The session that owns this UserTimeline execution.
     * @param Twitter_Timelines_UserTimeline $choreo The choreography object for this execution.
     * @param Twitter_Timelines_UserTimeline_Inputs|array $inputs (optional) Inputs as Twitter_Timelines_UserTimeline_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Timelines_UserTimeline_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Timelines_UserTimeline $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UserTimeline execution.
     *
     * @return Twitter_Timelines_UserTimeline_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this UserTimeline execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Timelines_UserTimeline_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Timelines_UserTimeline_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UserTimeline Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_UserTimeline_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UserTimeline Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Timelines_UserTimeline_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UserTimeline execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Remaining" output from this UserTimeline execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Reset" output from this UserTimeline execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
    /**
     * Retrieve the value for the "Limit" output from this UserTimeline execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
}

/**
 * Retrieves a list of numeric IDs for every user the specified user is following (also known as their "friends").
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_GetFriendsByID extends Temboo_Choreography
{
    /**
     * Retrieves a list of numeric IDs for every user the specified user is following (also known as their "friends").
     *
     * @param Temboo_Session $session The session that owns this GetFriendsByID Choreo.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/FriendsAndFollowers/GetFriendsByID/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetFriendsByID Choreo.
     *
     * @param Twitter_FriendsAndFollowers_GetFriendsByID_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_GetFriendsByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_FriendsAndFollowers_GetFriendsByID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetFriendsByID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_FriendsAndFollowers_GetFriendsByID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetFriendsByID Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_GetFriendsByID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetFriendsByID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetFriendsByID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetFriendsByID Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetFriendsByID Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetFriendsByID Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetFriendsByID Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Cursor input for this GetFriendsByID Choreo.
     *
     * @param string $value (optional, string) Allows you to pass in the previous_cursor or next_cursor in order to page through results.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Inputs For method chaining.
     */
    public function setCursor($value)
    {
        return $this->set('Cursor', $value);
    }

    /**
     * Set the value for the ScreenName input for this GetFriendsByID Choreo.
     *
     * @param string $value (conditional, string) The screen name of the user for whom to return results for. Required if UserId isn't specified.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the StringifyIDs input for this GetFriendsByID Choreo.
     *
     * @param bool $value (optional, boolean) A boolean flag indicating that Tweet IDs should be returned as strings.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Inputs For method chaining.
     */
    public function setStringifyIDs($value)
    {
        return $this->set('StringifyIDs', $value);
    }

    /**
     * Set the value for the UserID input for this GetFriendsByID Choreo.
     *
     * @param string $value (conditional, string) The ID of the user for whom to return results for. Required if ScreenName isn't specified.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetFriendsByID Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_GetFriendsByID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetFriendsByID Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetFriendsByID execution.
     * @param Twitter_FriendsAndFollowers_GetFriendsByID $choreo The choreography object for this execution.
     * @param Twitter_FriendsAndFollowers_GetFriendsByID_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_GetFriendsByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_FriendsAndFollowers_GetFriendsByID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetFriendsByID execution.
     *
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetFriendsByID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_FriendsAndFollowers_GetFriendsByID_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetFriendsByID Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_GetFriendsByID_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetFriendsByID Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Remaining" output from this GetFriendsByID execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Limit" output from this GetFriendsByID execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Reset" output from this GetFriendsByID execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
    /**
     * Retrieve the value for the "Response" output from this GetFriendsByID execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Completes the OAuth process by retrieving a Twitter access token and access token secret for a user, after they have visited the authorization URL returned by the InitializeOAuth Choreo and clicked "allow."
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_OAuth_FinalizeOAuth extends Temboo_Choreography
{
    /**
     * Completes the OAuth process by retrieving a Twitter access token and access token secret for a user, after they have visited the authorization URL returned by the InitializeOAuth Choreo and clicked "allow."
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth Choreo.
     * @return Twitter_OAuth_FinalizeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/OAuth/FinalizeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FinalizeOAuth Choreo.
     *
     * @param Twitter_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as Twitter_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_OAuth_FinalizeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_OAuth_FinalizeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_OAuth_FinalizeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_OAuth_FinalizeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_OAuth_FinalizeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_OAuth_FinalizeOAuth_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FinalizeOAuth input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Twitter_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the AppKeyName input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Twitter_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAppKeyName($value)
    {
        return $this->set('AppKeyName', $value);
    }

    /**
     * Set the value for the AppKeyValue input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Twitter_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAppKeyValue($value)
    {
        return $this->set('AppKeyValue', $value);
    }

    /**
     * Set the value for the CallbackID input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The callback token returned by the InitializeOAuth Choreo. Used to retrieve the callback data after the user authorizes.
     * @return Twitter_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCallbackID($value)
    {
        return $this->set('CallbackID', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the OAuthTokenSecret input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The oauth_token_secret retrieved during the OAuth process. This is returned by the InitializeOAuth Choreo.
     * @return Twitter_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setOAuthTokenSecret($value)
    {
        return $this->set('OAuthTokenSecret', $value);
    }

    /**
     * Set the value for the Timeout input for this FinalizeOAuth Choreo.
     *
     * @param int $value (optional, integer) The amount of time (in seconds) to poll your Temboo callback URL to see if your app's user has allowed or denied the request for access. Defaults to 20. Max is 60.
     * @return Twitter_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setTimeout($value)
    {
        return $this->set('Timeout', $value);
    }
}


/**
 * Execution object for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_OAuth_FinalizeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FinalizeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth execution.
     * @param Twitter_OAuth_FinalizeOAuth $choreo The choreography object for this execution.
     * @param Twitter_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as Twitter_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_OAuth_FinalizeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_OAuth_FinalizeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FinalizeOAuth execution.
     *
     * @return Twitter_OAuth_FinalizeOAuth_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this FinalizeOAuth execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_OAuth_FinalizeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_OAuth_FinalizeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_OAuth_FinalizeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FinalizeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_OAuth_FinalizeOAuth_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ScreenName" output from this FinalizeOAuth execution.
     *
     * @return string (string) The Twitter screen name associated with the access token that is being retrieved.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getScreenName()
    {
        return $this->get('ScreenName');
    }
    /**
     * Retrieve the value for the "AccessTokenSecret" output from this FinalizeOAuth execution.
     *
     * @return string (string) The Access Token Secret retrieved during the OAuth process.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAccessTokenSecret()
    {
        return $this->get('AccessTokenSecret');
    }
    /**
     * Retrieve the value for the "AccessToken" output from this FinalizeOAuth execution.
     *
     * @return string (string) The Access Token retrieved during the OAuth process.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAccessToken()
    {
        return $this->get('AccessToken');
    }
    /**
     * Retrieve the value for the "UserID" output from this FinalizeOAuth execution.
     *
     * @return int (integer) The Twitter user id associated with the AccessToken that is being retrieved.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getUserID()
    {
        return $this->get('UserID');
    }
}

/**
 * Generates an authorization URL that an application can use to complete the first step in the OAuth process.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_OAuth_InitializeOAuth extends Temboo_Choreography
{
    /**
     * Generates an authorization URL that an application can use to complete the first step in the OAuth process.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth Choreo.
     * @return Twitter_OAuth_InitializeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/OAuth/InitializeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this InitializeOAuth Choreo.
     *
     * @param Twitter_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as Twitter_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_OAuth_InitializeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_OAuth_InitializeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_OAuth_InitializeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_OAuth_InitializeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_OAuth_InitializeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_OAuth_InitializeOAuth_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this InitializeOAuth input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Twitter_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the AppKeyName input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Twitter_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAppKeyName($value)
    {
        return $this->set('AppKeyName', $value);
    }

    /**
     * Set the value for the AppKeyValue input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Twitter_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAppKeyValue($value)
    {
        return $this->set('AppKeyValue', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this InitializeOAuth Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this InitializeOAuth Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ForwardingURL input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) The URL that Temboo will redirect your users to after they grant access to your application. This should include the "https://" or "http://" prefix and be a fully qualified URL.
     * @return Twitter_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setForwardingURL($value)
    {
        return $this->set('ForwardingURL', $value);
    }
}


/**
 * Execution object for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_OAuth_InitializeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the InitializeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth execution.
     * @param Twitter_OAuth_InitializeOAuth $choreo The choreography object for this execution.
     * @param Twitter_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as Twitter_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_OAuth_InitializeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_OAuth_InitializeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this InitializeOAuth execution.
     *
     * @return Twitter_OAuth_InitializeOAuth_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this InitializeOAuth execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_OAuth_InitializeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_OAuth_InitializeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_OAuth_InitializeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the InitializeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_OAuth_InitializeOAuth_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "AuthorizationURL" output from this InitializeOAuth execution.
     *
     * @return string (string) The authorization URL that the application's user needs to go to in order to grant access to your application.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAuthorizationURL()
    {
        return $this->get('AuthorizationURL');
    }
    /**
     * Retrieve the value for the "OAuthTokenSecret" output from this InitializeOAuth execution.
     *
     * @return string (string) The temporary OAuth Token Secret that can be exchanged for permanent tokens using the FinalizeOAuth Choreo.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getOAuthTokenSecret()
    {
        return $this->get('OAuthTokenSecret');
    }
    /**
     * Retrieve the value for the "CallbackID" output from this InitializeOAuth execution.
     *
     * @return string (string) An ID used to retrieve the callback data that Temboo stores once your application's user authorizes.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getCallbackID()
    {
        return $this->get('CallbackID');
    }
}

/**
 * Unsubscribes the authenticated user from the specified list.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_DestroySubscriber extends Temboo_Choreography
{
    /**
     * Unsubscribes the authenticated user from the specified list.
     *
     * @param Temboo_Session $session The session that owns this DestroySubscriber Choreo.
     * @return Twitter_Lists_DestroySubscriber New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Lists/DestroySubscriber/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DestroySubscriber Choreo.
     *
     * @param Twitter_Lists_DestroySubscriber_Inputs|array $inputs (optional) Inputs as Twitter_Lists_DestroySubscriber_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Lists_DestroySubscriber_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Lists_DestroySubscriber_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DestroySubscriber Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Lists_DestroySubscriber_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Lists_DestroySubscriber_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DestroySubscriber Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_DestroySubscriber_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DestroySubscriber Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Lists_DestroySubscriber_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DestroySubscriber input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Lists_DestroySubscriber_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Lists_DestroySubscriber_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this DestroySubscriber Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Lists_DestroySubscriber_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this DestroySubscriber Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Lists_DestroySubscriber_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this DestroySubscriber Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Lists_DestroySubscriber_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this DestroySubscriber Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Lists_DestroySubscriber_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ListId input for this DestroySubscriber Choreo.
     *
     * @param string $value (conditional, string) The numerical ID of the list. Required unless Slug is provided.
     * @return Twitter_Lists_DestroySubscriber_Inputs For method chaining.
     */
    public function setListId($value)
    {
        return $this->set('ListId', $value);
    }

    /**
     * Set the value for the OwnerId input for this DestroySubscriber Choreo.
     *
     * @param string $value (optional, string) The user ID of the user who owns the list being requested by a slug.
     * @return Twitter_Lists_DestroySubscriber_Inputs For method chaining.
     */
    public function setOwnerId($value)
    {
        return $this->set('OwnerId', $value);
    }

    /**
     * Set the value for the OwnerScreenName input for this DestroySubscriber Choreo.
     *
     * @param string $value (optional, string) The screen name of the user who owns the list being requested by a slug.
     * @return Twitter_Lists_DestroySubscriber_Inputs For method chaining.
     */
    public function setOwnerScreenName($value)
    {
        return $this->set('OwnerScreenName', $value);
    }

    /**
     * Set the value for the Slug input for this DestroySubscriber Choreo.
     *
     * @param string $value (optional, string) When identifying a list by a slug, either OwnerScreenName or OwnerId must be provided.
     * @return Twitter_Lists_DestroySubscriber_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }
}


/**
 * Execution object for the DestroySubscriber Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_DestroySubscriber_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DestroySubscriber Choreo.
     *
     * @param Temboo_Session $session The session that owns this DestroySubscriber execution.
     * @param Twitter_Lists_DestroySubscriber $choreo The choreography object for this execution.
     * @param Twitter_Lists_DestroySubscriber_Inputs|array $inputs (optional) Inputs as Twitter_Lists_DestroySubscriber_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Lists_DestroySubscriber_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Lists_DestroySubscriber $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DestroySubscriber execution.
     *
     * @return Twitter_Lists_DestroySubscriber_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this DestroySubscriber execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Lists_DestroySubscriber_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Lists_DestroySubscriber_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DestroySubscriber Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_DestroySubscriber_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DestroySubscriber Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Lists_DestroySubscriber_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DestroySubscriber execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the 20 most recent direct messages sent by the authenticating user.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_DirectMessagesSent extends Temboo_Choreography
{
    /**
     * Retrieves the 20 most recent direct messages sent by the authenticating user.
     *
     * @param Temboo_Session $session The session that owns this DirectMessagesSent Choreo.
     * @return Twitter_DirectMessages_DirectMessagesSent New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/DirectMessages/DirectMessagesSent/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DirectMessagesSent Choreo.
     *
     * @param Twitter_DirectMessages_DirectMessagesSent_Inputs|array $inputs (optional) Inputs as Twitter_DirectMessages_DirectMessagesSent_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_DirectMessages_DirectMessagesSent_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_DirectMessages_DirectMessagesSent_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DirectMessagesSent Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_DirectMessages_DirectMessagesSent_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_DirectMessages_DirectMessagesSent_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DirectMessagesSent Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_DirectMessagesSent_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DirectMessagesSent Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_DirectMessages_DirectMessagesSent_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DirectMessagesSent input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_DirectMessages_DirectMessagesSent_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_DirectMessages_DirectMessagesSent_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this DirectMessagesSent Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_DirectMessages_DirectMessagesSent_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this DirectMessagesSent Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_DirectMessages_DirectMessagesSent_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this DirectMessagesSent Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_DirectMessages_DirectMessagesSent_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this DirectMessagesSent Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_DirectMessages_DirectMessagesSent_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Count input for this DirectMessagesSent Choreo.
     *
     * @param int $value (optional, integer) Specifies the number of records to retrieve up to a maximum of 200.
     * @return Twitter_DirectMessages_DirectMessagesSent_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this DirectMessagesSent Choreo.
     *
     * @param bool $value (optional, boolean) The "entities" node containing extra metadata will not be included when set to false.
     * @return Twitter_DirectMessages_DirectMessagesSent_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the MaxID input for this DirectMessagesSent Choreo.
     *
     * @param string $value (optional, string) Returns results with an ID less than (older than) or equal to the specified ID.
     * @return Twitter_DirectMessages_DirectMessagesSent_Inputs For method chaining.
     */
    public function setMaxID($value)
    {
        return $this->set('MaxID', $value);
    }

    /**
     * Set the value for the Page input for this DirectMessagesSent Choreo.
     *
     * @param int $value (optional, integer) Specifies the page of results to retrieve.
     * @return Twitter_DirectMessages_DirectMessagesSent_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the SinceID input for this DirectMessagesSent Choreo.
     *
     * @param string $value (optional, string) Returns results with an ID greater than (more recent than) the specified ID.
     * @return Twitter_DirectMessages_DirectMessagesSent_Inputs For method chaining.
     */
    public function setSinceID($value)
    {
        return $this->set('SinceID', $value);
    }
}


/**
 * Execution object for the DirectMessagesSent Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_DirectMessagesSent_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DirectMessagesSent Choreo.
     *
     * @param Temboo_Session $session The session that owns this DirectMessagesSent execution.
     * @param Twitter_DirectMessages_DirectMessagesSent $choreo The choreography object for this execution.
     * @param Twitter_DirectMessages_DirectMessagesSent_Inputs|array $inputs (optional) Inputs as Twitter_DirectMessages_DirectMessagesSent_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_DirectMessages_DirectMessagesSent_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_DirectMessages_DirectMessagesSent $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DirectMessagesSent execution.
     *
     * @return Twitter_DirectMessages_DirectMessagesSent_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this DirectMessagesSent execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_DirectMessages_DirectMessagesSent_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_DirectMessages_DirectMessagesSent_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DirectMessagesSent Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_DirectMessagesSent_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DirectMessagesSent Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_DirectMessages_DirectMessagesSent_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this DirectMessagesSent execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Response" output from this DirectMessagesSent execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Reset" output from this DirectMessagesSent execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
    /**
     * Retrieve the value for the "Remaining" output from this DirectMessagesSent execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Updates values that users are able to set under "Account" tab of their settings page.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_UpdateProfile extends Temboo_Choreography
{
    /**
     * Updates values that users are able to set under "Account" tab of their settings page.
     *
     * @param Temboo_Session $session The session that owns this UpdateProfile Choreo.
     * @return Twitter_Users_UpdateProfile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Users/UpdateProfile/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateProfile Choreo.
     *
     * @param Twitter_Users_UpdateProfile_Inputs|array $inputs (optional) Inputs as Twitter_Users_UpdateProfile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Users_UpdateProfile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Users_UpdateProfile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateProfile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Users_UpdateProfile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Users_UpdateProfile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateProfile Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_UpdateProfile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateProfile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Users_UpdateProfile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateProfile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Users_UpdateProfile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Users_UpdateProfile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this UpdateProfile Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Users_UpdateProfile_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this UpdateProfile Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Users_UpdateProfile_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this UpdateProfile Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Users_UpdateProfile_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this UpdateProfile Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Users_UpdateProfile_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Description input for this UpdateProfile Choreo.
     *
     * @param string $value (optional, string) A description of the user owning the account. Maximum of 160 characters.
     * @return Twitter_Users_UpdateProfile_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the IncludeUserEntities input for this UpdateProfile Choreo.
     *
     * @param bool $value (optional, boolean) The user "entities" node containing extra metadata will not be included when set to false.
     * @return Twitter_Users_UpdateProfile_Inputs For method chaining.
     */
    public function setIncludeUserEntities($value)
    {
        return $this->set('IncludeUserEntities', $value);
    }

    /**
     * Set the value for the Location input for this UpdateProfile Choreo.
     *
     * @param string $value (optional, string) The city or country describing where the user of the account is located.
     * @return Twitter_Users_UpdateProfile_Inputs For method chaining.
     */
    public function setLocation($value)
    {
        return $this->set('Location', $value);
    }

    /**
     * Set the value for the Name input for this UpdateProfile Choreo.
     *
     * @param string $value (optional, string) The full name associated with the profile. Maximum of 20 characters.
     * @return Twitter_Users_UpdateProfile_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the SkipStatus input for this UpdateProfile Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, statuses will not be included in the returned user objects.
     * @return Twitter_Users_UpdateProfile_Inputs For method chaining.
     */
    public function setSkipStatus($value)
    {
        return $this->set('SkipStatus', $value);
    }

    /**
     * Set the value for the URL input for this UpdateProfile Choreo.
     *
     * @param string $value (optional, string) URL associated with the profile.
     * @return Twitter_Users_UpdateProfile_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }
}


/**
 * Execution object for the UpdateProfile Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_UpdateProfile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateProfile Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateProfile execution.
     * @param Twitter_Users_UpdateProfile $choreo The choreography object for this execution.
     * @param Twitter_Users_UpdateProfile_Inputs|array $inputs (optional) Inputs as Twitter_Users_UpdateProfile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Users_UpdateProfile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Users_UpdateProfile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateProfile execution.
     *
     * @return Twitter_Users_UpdateProfile_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this UpdateProfile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Users_UpdateProfile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Users_UpdateProfile_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateProfile Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_UpdateProfile_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateProfile Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Users_UpdateProfile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Remaining" output from this UpdateProfile execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateProfile execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Reset" output from this UpdateProfile execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
    /**
     * Retrieve the value for the "Limit" output from this UpdateProfile execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
}

/**
 * Retrieves lists owned by the specified user.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_GetOwnedLists extends Temboo_Choreography
{
    /**
     * Retrieves lists owned by the specified user.
     *
     * @param Temboo_Session $session The session that owns this GetOwnedLists Choreo.
     * @return Twitter_Lists_GetOwnedLists New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Lists/GetOwnedLists/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetOwnedLists Choreo.
     *
     * @param Twitter_Lists_GetOwnedLists_Inputs|array $inputs (optional) Inputs as Twitter_Lists_GetOwnedLists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Lists_GetOwnedLists_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Lists_GetOwnedLists_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetOwnedLists Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Lists_GetOwnedLists_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Lists_GetOwnedLists_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetOwnedLists Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_GetOwnedLists_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetOwnedLists Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Lists_GetOwnedLists_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetOwnedLists input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Lists_GetOwnedLists_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Lists_GetOwnedLists_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetOwnedLists Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Lists_GetOwnedLists_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetOwnedLists Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Lists_GetOwnedLists_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetOwnedLists Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Lists_GetOwnedLists_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetOwnedLists Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Lists_GetOwnedLists_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Count input for this GetOwnedLists Choreo.
     *
     * @param int $value (optional, integer) The number of results to return per page.
     * @return Twitter_Lists_GetOwnedLists_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the Cursor input for this GetOwnedLists Choreo.
     *
     * @param string $value (optional, string) Allows you to pass in the previous_cursor or next_cursor in order to page through results.
     * @return Twitter_Lists_GetOwnedLists_Inputs For method chaining.
     */
    public function setCursor($value)
    {
        return $this->set('Cursor', $value);
    }

    /**
     * Set the value for the ScreenName input for this GetOwnedLists Choreo.
     *
     * @param string $value (optional, string) The screen name of the user for whom to return results for. If not provided, the authenticating user is assumed.
     * @return Twitter_Lists_GetOwnedLists_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the UserId input for this GetOwnedLists Choreo.
     *
     * @param string $value (optional, string) The ID of the user for whom to return results for. If not provided, the authenticating user is assumed.
     * @return Twitter_Lists_GetOwnedLists_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the GetOwnedLists Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_GetOwnedLists_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetOwnedLists Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetOwnedLists execution.
     * @param Twitter_Lists_GetOwnedLists $choreo The choreography object for this execution.
     * @param Twitter_Lists_GetOwnedLists_Inputs|array $inputs (optional) Inputs as Twitter_Lists_GetOwnedLists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Lists_GetOwnedLists_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Lists_GetOwnedLists $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetOwnedLists execution.
     *
     * @return Twitter_Lists_GetOwnedLists_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetOwnedLists execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Lists_GetOwnedLists_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Lists_GetOwnedLists_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetOwnedLists Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_GetOwnedLists_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetOwnedLists Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Lists_GetOwnedLists_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this GetOwnedLists execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Reset" output from this GetOwnedLists execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
    /**
     * Retrieve the value for the "Remaining" output from this GetOwnedLists execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this GetOwnedLists execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to unfollow another Twitter user when you specify a Twitter user ID or screen name.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_DeleteFriendship extends Temboo_Choreography
{
    /**
     * Allows you to unfollow another Twitter user when you specify a Twitter user ID or screen name.
     *
     * @param Temboo_Session $session The session that owns this DeleteFriendship Choreo.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/FriendsAndFollowers/DeleteFriendship/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteFriendship Choreo.
     *
     * @param Twitter_FriendsAndFollowers_DeleteFriendship_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_DeleteFriendship_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_FriendsAndFollowers_DeleteFriendship_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteFriendship Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_FriendsAndFollowers_DeleteFriendship_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteFriendship Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_DeleteFriendship_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteFriendship Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteFriendship input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this DeleteFriendship Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this DeleteFriendship Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this DeleteFriendship Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this DeleteFriendship Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ScreenName input for this DeleteFriendship Choreo.
     *
     * @param string $value (conditional, string) The screen name for the friend you want to unfollow. Required if UserId isn't specified.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the UserId input for this DeleteFriendship Choreo.
     *
     * @param string $value (conditional, string) The user ID for the friend you want to unfollow. Required if ScreenName isn't specified.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the DeleteFriendship Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_DeleteFriendship_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteFriendship Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteFriendship execution.
     * @param Twitter_FriendsAndFollowers_DeleteFriendship $choreo The choreography object for this execution.
     * @param Twitter_FriendsAndFollowers_DeleteFriendship_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_DeleteFriendship_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_FriendsAndFollowers_DeleteFriendship $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteFriendship execution.
     *
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this DeleteFriendship execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_FriendsAndFollowers_DeleteFriendship_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteFriendship Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_DeleteFriendship_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteFriendship Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteFriendship execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the most recent tweets posted by the authenticating user that have recently been retweeted by others.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_RetweetsOfMe extends Temboo_Choreography
{
    /**
     * Retrieves the most recent tweets posted by the authenticating user that have recently been retweeted by others.
     *
     * @param Temboo_Session $session The session that owns this RetweetsOfMe Choreo.
     * @return Twitter_Timelines_RetweetsOfMe New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Timelines/RetweetsOfMe/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetweetsOfMe Choreo.
     *
     * @param Twitter_Timelines_RetweetsOfMe_Inputs|array $inputs (optional) Inputs as Twitter_Timelines_RetweetsOfMe_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Timelines_RetweetsOfMe_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Timelines_RetweetsOfMe_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetweetsOfMe Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Timelines_RetweetsOfMe_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetweetsOfMe Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_RetweetsOfMe_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetweetsOfMe Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetweetsOfMe input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this RetweetsOfMe Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this RetweetsOfMe Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this RetweetsOfMe Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this RetweetsOfMe Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Count input for this RetweetsOfMe Choreo.
     *
     * @param int $value (optional, integer) Specifies the number of records to retrieve. Must be less than or equal to 200. Defaults to 20.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this RetweetsOfMe Choreo.
     *
     * @param bool $value (optional, boolean) The tweets "entities" node containing extra metadata will not be included when set to false.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the IncludeUserEntities input for this RetweetsOfMe Choreo.
     *
     * @param bool $value (optional, boolean) The user "entities" node containing extra metadata will not be included when set to false.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs For method chaining.
     */
    public function setIncludeUserEntities($value)
    {
        return $this->set('IncludeUserEntities', $value);
    }

    /**
     * Set the value for the MaxId input for this RetweetsOfMe Choreo.
     *
     * @param string $value (optional, string) Returns results with an ID less than (older than) or equal to the specified ID.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs For method chaining.
     */
    public function setMaxId($value)
    {
        return $this->set('MaxId', $value);
    }

    /**
     * Set the value for the SinceId input for this RetweetsOfMe Choreo.
     *
     * @param string $value (optional, string) Returns results with an ID greater than (more recent than) the specified ID.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs For method chaining.
     */
    public function setSinceId($value)
    {
        return $this->set('SinceId', $value);
    }

    /**
     * Set the value for the TrimUser input for this RetweetsOfMe Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, each tweet returned in a timeline will include a user object including only the status authors numerical ID. Defaults to false.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs For method chaining.
     */
    public function setTrimUser($value)
    {
        return $this->set('TrimUser', $value);
    }
}


/**
 * Execution object for the RetweetsOfMe Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_RetweetsOfMe_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetweetsOfMe Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetweetsOfMe execution.
     * @param Twitter_Timelines_RetweetsOfMe $choreo The choreography object for this execution.
     * @param Twitter_Timelines_RetweetsOfMe_Inputs|array $inputs (optional) Inputs as Twitter_Timelines_RetweetsOfMe_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Timelines_RetweetsOfMe_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Timelines_RetweetsOfMe $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetweetsOfMe execution.
     *
     * @return Twitter_Timelines_RetweetsOfMe_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this RetweetsOfMe execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Timelines_RetweetsOfMe_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Timelines_RetweetsOfMe_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetweetsOfMe Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_RetweetsOfMe_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetweetsOfMe Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Timelines_RetweetsOfMe_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this RetweetsOfMe execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Reset" output from this RetweetsOfMe execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
    /**
     * Retrieve the value for the "Remaining" output from this RetweetsOfMe execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this RetweetsOfMe execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the locations that Twitter has trending topic information for.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Trends_Available extends Temboo_Choreography
{
    /**
     * Retrieves the locations that Twitter has trending topic information for.
     *
     * @param Temboo_Session $session The session that owns this Available Choreo.
     * @return Twitter_Trends_Available New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Trends/Available/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Available Choreo.
     *
     * @param Twitter_Trends_Available_Inputs|array $inputs (optional) Inputs as Twitter_Trends_Available_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Trends_Available_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Trends_Available_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Available Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Trends_Available_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Trends_Available_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Available Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Trends_Available_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Available Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Trends_Available_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Available input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Trends_Available_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Trends_Available_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this Available Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Trends_Available_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this Available Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Trends_Available_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this Available Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Trends_Available_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this Available Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Trends_Available_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }
}


/**
 * Execution object for the Available Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Trends_Available_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Available Choreo.
     *
     * @param Temboo_Session $session The session that owns this Available execution.
     * @param Twitter_Trends_Available $choreo The choreography object for this execution.
     * @param Twitter_Trends_Available_Inputs|array $inputs (optional) Inputs as Twitter_Trends_Available_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Trends_Available_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Trends_Available $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Available execution.
     *
     * @return Twitter_Trends_Available_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Available execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Trends_Available_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Trends_Available_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Available Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Trends_Available_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Available Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Trends_Available_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this Available execution.
     *
     * @return int (integer) The rate limit ceiling for this particular request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Response" output from this Available execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Remaining" output from this Available execution.
     *
     * @return int (integer) The number of requests left for the 15 minute window.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Reset" output from this Available execution.
     *
     * @return string (date) The remaining window before the rate limit resets in UTC epoch seconds.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getReset()
    {
        return $this->get('Reset');
    }
}

/**
 * Subscribes the authenticated user to the specified list.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_CreateSubscriber extends Temboo_Choreography
{
    /**
     * Subscribes the authenticated user to the specified list.
     *
     * @param Temboo_Session $session The session that owns this CreateSubscriber Choreo.
     * @return Twitter_Lists_CreateSubscriber New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Lists/CreateSubscriber/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateSubscriber Choreo.
     *
     * @param Twitter_Lists_CreateSubscriber_Inputs|array $inputs (optional) Inputs as Twitter_Lists_CreateSubscriber_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Lists_CreateSubscriber_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Lists_CreateSubscriber_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateSubscriber Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Lists_CreateSubscriber_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Lists_CreateSubscriber_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateSubscriber Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_CreateSubscriber_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateSubscriber Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Lists_CreateSubscriber_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateSubscriber input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Lists_CreateSubscriber_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Lists_CreateSubscriber_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this CreateSubscriber Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Lists_CreateSubscriber_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this CreateSubscriber Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Lists_CreateSubscriber_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this CreateSubscriber Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Lists_CreateSubscriber_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this CreateSubscriber Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Lists_CreateSubscriber_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ListId input for this CreateSubscriber Choreo.
     *
     * @param string $value (conditional, string) The numerical ID of the list. Required unless Slug is provided.
     * @return Twitter_Lists_CreateSubscriber_Inputs For method chaining.
     */
    public function setListId($value)
    {
        return $this->set('ListId', $value);
    }

    /**
     * Set the value for the OwnerId input for this CreateSubscriber Choreo.
     *
     * @param string $value (optional, string) The user ID of the user who owns the list being requested by a slug.
     * @return Twitter_Lists_CreateSubscriber_Inputs For method chaining.
     */
    public function setOwnerId($value)
    {
        return $this->set('OwnerId', $value);
    }

    /**
     * Set the value for the OwnerScreenName input for this CreateSubscriber Choreo.
     *
     * @param string $value (optional, string) The screen name of the user who owns the list being requested by a slug.
     * @return Twitter_Lists_CreateSubscriber_Inputs For method chaining.
     */
    public function setOwnerScreenName($value)
    {
        return $this->set('OwnerScreenName', $value);
    }

    /**
     * Set the value for the Slug input for this CreateSubscriber Choreo.
     *
     * @param string $value (optional, string) When identifying a list by a slug, either OwnerScreenName or OwnerId must be provided.
     * @return Twitter_Lists_CreateSubscriber_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }
}


/**
 * Execution object for the CreateSubscriber Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_CreateSubscriber_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateSubscriber Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateSubscriber execution.
     * @param Twitter_Lists_CreateSubscriber $choreo The choreography object for this execution.
     * @param Twitter_Lists_CreateSubscriber_Inputs|array $inputs (optional) Inputs as Twitter_Lists_CreateSubscriber_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Lists_CreateSubscriber_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Lists_CreateSubscriber $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateSubscriber execution.
     *
     * @return Twitter_Lists_CreateSubscriber_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this CreateSubscriber execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Lists_CreateSubscriber_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Lists_CreateSubscriber_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateSubscriber Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Lists_CreateSubscriber_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateSubscriber Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Lists_CreateSubscriber_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateSubscriber execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>