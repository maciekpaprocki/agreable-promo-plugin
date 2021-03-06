import React, { Component } from 'react'
import classNames from 'classnames'
import ValidationMessage from './validation-message'

class TextInput extends Component {

  _inputClasses() {
    return classNames('agreable-promo__input', {
      'agreable-promo__input--valid': this.props.valid,
      'agreable-promo__input--invalid': (this.props.formValidating && !this.props.valid && this.props.required)
    })
  }

  _widthClass() {
    return classNames({
      'agreable-promo--half': !this.props.fullWidth,
      'agreable-promo--full': this.props.fullWidth
    })
  }

  render() {

    var inputClasses = this._inputClasses()
    var widthClass = this._widthClass()

    return (
      <div className={widthClass}>

        <label className='agreable-promo__label'>
          {this.props.placeholder}:
        </label>

        <input
          className={inputClasses}
          name={this.props.name}
          onChange={this.props.onUpdate}
          placeholder={this.props.placeholder}
          type={this.props.type}
          value={this.props.upperCase ? this.props.value.toUpperCase() : this.props.value}
          disabled={this.props.formSubmitting}
          />

        <ValidationMessage
          {...this.props}
        />

      </div>
    )
  }

}

export default TextInput
