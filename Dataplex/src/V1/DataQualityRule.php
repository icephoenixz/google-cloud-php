<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/data_quality.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A rule captures data quality intent about a data source.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.DataQualityRule</code>
 */
class DataQualityRule extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The unnested column which this rule is evaluated against.
     *
     * Generated from protobuf field <code>string column = 500 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $column = '';
    /**
     * Optional. Rows with `null` values will automatically fail a rule, unless
     * `ignore_null` is `true`. In that case, such `null` rows are trivially
     * considered passing.
     * This field is only valid for the following type of rules:
     * * RangeExpectation
     * * RegexExpectation
     * * SetExpectation
     * * UniquenessExpectation
     *
     * Generated from protobuf field <code>bool ignore_null = 501 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $ignore_null = false;
    /**
     * Required. The dimension a rule belongs to. Results are also aggregated at
     * the dimension level. Supported dimensions are **["COMPLETENESS",
     * "ACCURACY", "CONSISTENCY", "VALIDITY", "UNIQUENESS", "FRESHNESS",
     * "VOLUME"]**
     *
     * Generated from protobuf field <code>string dimension = 502 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $dimension = '';
    /**
     * Optional. The minimum ratio of **passing_rows / total_rows** required to
     * pass this rule, with a range of [0.0, 1.0].
     * 0 indicates default value (i.e. 1.0).
     * This field is only valid for row-level type rules.
     *
     * Generated from protobuf field <code>double threshold = 503 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $threshold = 0.0;
    /**
     * Optional. A mutable name for the rule.
     * * The name must contain only letters (a-z, A-Z), numbers (0-9), or
     * hyphens (-).
     * * The maximum length is 63 characters.
     * * Must start with a letter.
     * * Must end with a number or a letter.
     *
     * Generated from protobuf field <code>string name = 504 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $name = '';
    /**
     * Optional. Description of the rule.
     * * The maximum length is 1,024 characters.
     *
     * Generated from protobuf field <code>string description = 505 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $description = '';
    /**
     * Optional. Whether the Rule is active or suspended.
     * Default is false.
     *
     * Generated from protobuf field <code>bool suspended = 506 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $suspended = false;
    protected $rule_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dataplex\V1\DataQualityRule\RangeExpectation $range_expectation
     *           Row-level rule which evaluates whether each column value lies between a
     *           specified range.
     *     @type \Google\Cloud\Dataplex\V1\DataQualityRule\NonNullExpectation $non_null_expectation
     *           Row-level rule which evaluates whether each column value is null.
     *     @type \Google\Cloud\Dataplex\V1\DataQualityRule\SetExpectation $set_expectation
     *           Row-level rule which evaluates whether each column value is contained by
     *           a specified set.
     *     @type \Google\Cloud\Dataplex\V1\DataQualityRule\RegexExpectation $regex_expectation
     *           Row-level rule which evaluates whether each column value matches a
     *           specified regex.
     *     @type \Google\Cloud\Dataplex\V1\DataQualityRule\UniquenessExpectation $uniqueness_expectation
     *           Row-level rule which evaluates whether each column value is unique.
     *     @type \Google\Cloud\Dataplex\V1\DataQualityRule\StatisticRangeExpectation $statistic_range_expectation
     *           Aggregate rule which evaluates whether the column aggregate
     *           statistic lies between a specified range.
     *     @type \Google\Cloud\Dataplex\V1\DataQualityRule\RowConditionExpectation $row_condition_expectation
     *           Row-level rule which evaluates whether each row in a table passes the
     *           specified condition.
     *     @type \Google\Cloud\Dataplex\V1\DataQualityRule\TableConditionExpectation $table_condition_expectation
     *           Aggregate rule which evaluates whether the provided expression is true
     *           for a table.
     *     @type \Google\Cloud\Dataplex\V1\DataQualityRule\SqlAssertion $sql_assertion
     *           Aggregate rule which evaluates the number of rows returned for the
     *           provided statement. If any rows are returned, this rule fails.
     *     @type string $column
     *           Optional. The unnested column which this rule is evaluated against.
     *     @type bool $ignore_null
     *           Optional. Rows with `null` values will automatically fail a rule, unless
     *           `ignore_null` is `true`. In that case, such `null` rows are trivially
     *           considered passing.
     *           This field is only valid for the following type of rules:
     *           * RangeExpectation
     *           * RegexExpectation
     *           * SetExpectation
     *           * UniquenessExpectation
     *     @type string $dimension
     *           Required. The dimension a rule belongs to. Results are also aggregated at
     *           the dimension level. Supported dimensions are **["COMPLETENESS",
     *           "ACCURACY", "CONSISTENCY", "VALIDITY", "UNIQUENESS", "FRESHNESS",
     *           "VOLUME"]**
     *     @type float $threshold
     *           Optional. The minimum ratio of **passing_rows / total_rows** required to
     *           pass this rule, with a range of [0.0, 1.0].
     *           0 indicates default value (i.e. 1.0).
     *           This field is only valid for row-level type rules.
     *     @type string $name
     *           Optional. A mutable name for the rule.
     *           * The name must contain only letters (a-z, A-Z), numbers (0-9), or
     *           hyphens (-).
     *           * The maximum length is 63 characters.
     *           * Must start with a letter.
     *           * Must end with a number or a letter.
     *     @type string $description
     *           Optional. Description of the rule.
     *           * The maximum length is 1,024 characters.
     *     @type bool $suspended
     *           Optional. Whether the Rule is active or suspended.
     *           Default is false.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\DataQuality::initOnce();
        parent::__construct($data);
    }

    /**
     * Row-level rule which evaluates whether each column value lies between a
     * specified range.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualityRule.RangeExpectation range_expectation = 1;</code>
     * @return \Google\Cloud\Dataplex\V1\DataQualityRule\RangeExpectation|null
     */
    public function getRangeExpectation()
    {
        return $this->readOneof(1);
    }

    public function hasRangeExpectation()
    {
        return $this->hasOneof(1);
    }

    /**
     * Row-level rule which evaluates whether each column value lies between a
     * specified range.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualityRule.RangeExpectation range_expectation = 1;</code>
     * @param \Google\Cloud\Dataplex\V1\DataQualityRule\RangeExpectation $var
     * @return $this
     */
    public function setRangeExpectation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataQualityRule\RangeExpectation::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Row-level rule which evaluates whether each column value is null.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualityRule.NonNullExpectation non_null_expectation = 2;</code>
     * @return \Google\Cloud\Dataplex\V1\DataQualityRule\NonNullExpectation|null
     */
    public function getNonNullExpectation()
    {
        return $this->readOneof(2);
    }

    public function hasNonNullExpectation()
    {
        return $this->hasOneof(2);
    }

    /**
     * Row-level rule which evaluates whether each column value is null.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualityRule.NonNullExpectation non_null_expectation = 2;</code>
     * @param \Google\Cloud\Dataplex\V1\DataQualityRule\NonNullExpectation $var
     * @return $this
     */
    public function setNonNullExpectation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataQualityRule\NonNullExpectation::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Row-level rule which evaluates whether each column value is contained by
     * a specified set.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualityRule.SetExpectation set_expectation = 3;</code>
     * @return \Google\Cloud\Dataplex\V1\DataQualityRule\SetExpectation|null
     */
    public function getSetExpectation()
    {
        return $this->readOneof(3);
    }

    public function hasSetExpectation()
    {
        return $this->hasOneof(3);
    }

    /**
     * Row-level rule which evaluates whether each column value is contained by
     * a specified set.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualityRule.SetExpectation set_expectation = 3;</code>
     * @param \Google\Cloud\Dataplex\V1\DataQualityRule\SetExpectation $var
     * @return $this
     */
    public function setSetExpectation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataQualityRule\SetExpectation::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Row-level rule which evaluates whether each column value matches a
     * specified regex.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualityRule.RegexExpectation regex_expectation = 4;</code>
     * @return \Google\Cloud\Dataplex\V1\DataQualityRule\RegexExpectation|null
     */
    public function getRegexExpectation()
    {
        return $this->readOneof(4);
    }

    public function hasRegexExpectation()
    {
        return $this->hasOneof(4);
    }

    /**
     * Row-level rule which evaluates whether each column value matches a
     * specified regex.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualityRule.RegexExpectation regex_expectation = 4;</code>
     * @param \Google\Cloud\Dataplex\V1\DataQualityRule\RegexExpectation $var
     * @return $this
     */
    public function setRegexExpectation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataQualityRule\RegexExpectation::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Row-level rule which evaluates whether each column value is unique.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualityRule.UniquenessExpectation uniqueness_expectation = 100;</code>
     * @return \Google\Cloud\Dataplex\V1\DataQualityRule\UniquenessExpectation|null
     */
    public function getUniquenessExpectation()
    {
        return $this->readOneof(100);
    }

    public function hasUniquenessExpectation()
    {
        return $this->hasOneof(100);
    }

    /**
     * Row-level rule which evaluates whether each column value is unique.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualityRule.UniquenessExpectation uniqueness_expectation = 100;</code>
     * @param \Google\Cloud\Dataplex\V1\DataQualityRule\UniquenessExpectation $var
     * @return $this
     */
    public function setUniquenessExpectation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataQualityRule\UniquenessExpectation::class);
        $this->writeOneof(100, $var);

        return $this;
    }

    /**
     * Aggregate rule which evaluates whether the column aggregate
     * statistic lies between a specified range.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualityRule.StatisticRangeExpectation statistic_range_expectation = 101;</code>
     * @return \Google\Cloud\Dataplex\V1\DataQualityRule\StatisticRangeExpectation|null
     */
    public function getStatisticRangeExpectation()
    {
        return $this->readOneof(101);
    }

    public function hasStatisticRangeExpectation()
    {
        return $this->hasOneof(101);
    }

    /**
     * Aggregate rule which evaluates whether the column aggregate
     * statistic lies between a specified range.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualityRule.StatisticRangeExpectation statistic_range_expectation = 101;</code>
     * @param \Google\Cloud\Dataplex\V1\DataQualityRule\StatisticRangeExpectation $var
     * @return $this
     */
    public function setStatisticRangeExpectation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataQualityRule\StatisticRangeExpectation::class);
        $this->writeOneof(101, $var);

        return $this;
    }

    /**
     * Row-level rule which evaluates whether each row in a table passes the
     * specified condition.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualityRule.RowConditionExpectation row_condition_expectation = 200;</code>
     * @return \Google\Cloud\Dataplex\V1\DataQualityRule\RowConditionExpectation|null
     */
    public function getRowConditionExpectation()
    {
        return $this->readOneof(200);
    }

    public function hasRowConditionExpectation()
    {
        return $this->hasOneof(200);
    }

    /**
     * Row-level rule which evaluates whether each row in a table passes the
     * specified condition.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualityRule.RowConditionExpectation row_condition_expectation = 200;</code>
     * @param \Google\Cloud\Dataplex\V1\DataQualityRule\RowConditionExpectation $var
     * @return $this
     */
    public function setRowConditionExpectation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataQualityRule\RowConditionExpectation::class);
        $this->writeOneof(200, $var);

        return $this;
    }

    /**
     * Aggregate rule which evaluates whether the provided expression is true
     * for a table.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualityRule.TableConditionExpectation table_condition_expectation = 201;</code>
     * @return \Google\Cloud\Dataplex\V1\DataQualityRule\TableConditionExpectation|null
     */
    public function getTableConditionExpectation()
    {
        return $this->readOneof(201);
    }

    public function hasTableConditionExpectation()
    {
        return $this->hasOneof(201);
    }

    /**
     * Aggregate rule which evaluates whether the provided expression is true
     * for a table.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualityRule.TableConditionExpectation table_condition_expectation = 201;</code>
     * @param \Google\Cloud\Dataplex\V1\DataQualityRule\TableConditionExpectation $var
     * @return $this
     */
    public function setTableConditionExpectation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataQualityRule\TableConditionExpectation::class);
        $this->writeOneof(201, $var);

        return $this;
    }

    /**
     * Aggregate rule which evaluates the number of rows returned for the
     * provided statement. If any rows are returned, this rule fails.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualityRule.SqlAssertion sql_assertion = 202;</code>
     * @return \Google\Cloud\Dataplex\V1\DataQualityRule\SqlAssertion|null
     */
    public function getSqlAssertion()
    {
        return $this->readOneof(202);
    }

    public function hasSqlAssertion()
    {
        return $this->hasOneof(202);
    }

    /**
     * Aggregate rule which evaluates the number of rows returned for the
     * provided statement. If any rows are returned, this rule fails.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualityRule.SqlAssertion sql_assertion = 202;</code>
     * @param \Google\Cloud\Dataplex\V1\DataQualityRule\SqlAssertion $var
     * @return $this
     */
    public function setSqlAssertion($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataQualityRule\SqlAssertion::class);
        $this->writeOneof(202, $var);

        return $this;
    }

    /**
     * Optional. The unnested column which this rule is evaluated against.
     *
     * Generated from protobuf field <code>string column = 500 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getColumn()
    {
        return $this->column;
    }

    /**
     * Optional. The unnested column which this rule is evaluated against.
     *
     * Generated from protobuf field <code>string column = 500 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setColumn($var)
    {
        GPBUtil::checkString($var, True);
        $this->column = $var;

        return $this;
    }

    /**
     * Optional. Rows with `null` values will automatically fail a rule, unless
     * `ignore_null` is `true`. In that case, such `null` rows are trivially
     * considered passing.
     * This field is only valid for the following type of rules:
     * * RangeExpectation
     * * RegexExpectation
     * * SetExpectation
     * * UniquenessExpectation
     *
     * Generated from protobuf field <code>bool ignore_null = 501 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getIgnoreNull()
    {
        return $this->ignore_null;
    }

    /**
     * Optional. Rows with `null` values will automatically fail a rule, unless
     * `ignore_null` is `true`. In that case, such `null` rows are trivially
     * considered passing.
     * This field is only valid for the following type of rules:
     * * RangeExpectation
     * * RegexExpectation
     * * SetExpectation
     * * UniquenessExpectation
     *
     * Generated from protobuf field <code>bool ignore_null = 501 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setIgnoreNull($var)
    {
        GPBUtil::checkBool($var);
        $this->ignore_null = $var;

        return $this;
    }

    /**
     * Required. The dimension a rule belongs to. Results are also aggregated at
     * the dimension level. Supported dimensions are **["COMPLETENESS",
     * "ACCURACY", "CONSISTENCY", "VALIDITY", "UNIQUENESS", "FRESHNESS",
     * "VOLUME"]**
     *
     * Generated from protobuf field <code>string dimension = 502 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDimension()
    {
        return $this->dimension;
    }

    /**
     * Required. The dimension a rule belongs to. Results are also aggregated at
     * the dimension level. Supported dimensions are **["COMPLETENESS",
     * "ACCURACY", "CONSISTENCY", "VALIDITY", "UNIQUENESS", "FRESHNESS",
     * "VOLUME"]**
     *
     * Generated from protobuf field <code>string dimension = 502 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDimension($var)
    {
        GPBUtil::checkString($var, True);
        $this->dimension = $var;

        return $this;
    }

    /**
     * Optional. The minimum ratio of **passing_rows / total_rows** required to
     * pass this rule, with a range of [0.0, 1.0].
     * 0 indicates default value (i.e. 1.0).
     * This field is only valid for row-level type rules.
     *
     * Generated from protobuf field <code>double threshold = 503 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return float
     */
    public function getThreshold()
    {
        return $this->threshold;
    }

    /**
     * Optional. The minimum ratio of **passing_rows / total_rows** required to
     * pass this rule, with a range of [0.0, 1.0].
     * 0 indicates default value (i.e. 1.0).
     * This field is only valid for row-level type rules.
     *
     * Generated from protobuf field <code>double threshold = 503 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param float $var
     * @return $this
     */
    public function setThreshold($var)
    {
        GPBUtil::checkDouble($var);
        $this->threshold = $var;

        return $this;
    }

    /**
     * Optional. A mutable name for the rule.
     * * The name must contain only letters (a-z, A-Z), numbers (0-9), or
     * hyphens (-).
     * * The maximum length is 63 characters.
     * * Must start with a letter.
     * * Must end with a number or a letter.
     *
     * Generated from protobuf field <code>string name = 504 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Optional. A mutable name for the rule.
     * * The name must contain only letters (a-z, A-Z), numbers (0-9), or
     * hyphens (-).
     * * The maximum length is 63 characters.
     * * Must start with a letter.
     * * Must end with a number or a letter.
     *
     * Generated from protobuf field <code>string name = 504 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Optional. Description of the rule.
     * * The maximum length is 1,024 characters.
     *
     * Generated from protobuf field <code>string description = 505 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. Description of the rule.
     * * The maximum length is 1,024 characters.
     *
     * Generated from protobuf field <code>string description = 505 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Optional. Whether the Rule is active or suspended.
     * Default is false.
     *
     * Generated from protobuf field <code>bool suspended = 506 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getSuspended()
    {
        return $this->suspended;
    }

    /**
     * Optional. Whether the Rule is active or suspended.
     * Default is false.
     *
     * Generated from protobuf field <code>bool suspended = 506 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setSuspended($var)
    {
        GPBUtil::checkBool($var);
        $this->suspended = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getRuleType()
    {
        return $this->whichOneof("rule_type");
    }

}

