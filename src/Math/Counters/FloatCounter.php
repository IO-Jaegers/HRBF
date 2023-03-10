<?php
    /**
     *
     */
	namespace IOJaegers\HRBF\Math\Counters;


    /**
     *
     */
    class FloatCounter
        implements FloatCounterInterface
    {
		/**
		 * @param float $value
		 */
        public function __construct(
			float $value = self::zero
		)
        {
            $this->setValue( $value );
        }

        // Variable
        private float $value = 0.0;

			// constants
        private const one = 1.0;
        private const zero = 0.0;
	
		/**
		 * @param mixed $withValue
		 * @return void
		 */
		public function decreaseByValue(
			mixed $withValue
		): void
		{
		
		}
	
		/**
		 * @return float
		 */
		public function getCounterValue(): float
		{
			return $this->getValue();
		}
	
		/**
		 * @param mixed $withValue
		 * @return void
		 */
		public function increaseByValue(
			mixed $withValue
		): void
		{
		
		}
	
		/**
		 * @param mixed $withValue
		 * @return void
		 */
		public function setCounterValue(
			mixed $withValue
		): void
		{
		
		}
	
		// Accessor
		/**
		 * @return float
		 */
        public final function getValue(): float
        {
            return $this->value;
        }
	
		/**
		 * @param float $value
		 * @return void
		 */
        public final function setValue(
			float $value
		): void
        {
            $this->value = $value;
        }

        /**
         * @return void
         */
        public final function increment(): void
        {
            $this->increase( self::one );
        }
	
		/**
		 * @param float $value
		 * @return void
		 */
        public final function increase(
			float $value
		): void
        {
            $this->setValue( $this->getValue() + $value );
        }

        /**
         * @return void
         */
        public final function decrement(): void
        {
            $this->decrease( self::one );
        }
	
		/**
		 * @param float $withValue
		 * @return void
		 */
        public final function decrease(
			float $withValue
		): void
        {
            $this->setValue($this->getValue() - $withValue );
        }
		
		public function isCounterZero(): bool
		{
			// TODO: Implement isCounterZero() method.
			return false;
		}
		
		public function isCounterEqualTo(mixed $v): bool
		{
			// TODO: Implement isCounterEqualTo() method.
			return false;
		}
	}
?>