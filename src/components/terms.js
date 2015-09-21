import React, { Component } from 'react'
import entities from 'entities'

import Checkbox from './checkbox'

class Terms extends Component {

  render () {
    return (
      <div>
        <label className="agreable-promo__label">
          Terms & Conditions:
        </label>
        <textarea 
          className="agreable-promo__textarea" 
          disabled="true" 
          value={entities.decodeHTML(this.props.text)}>
        </textarea>
        <Checkbox
          name="OptInTermsAndConditions"
          value={this.props.value}
          onUpdate={this.props.onUpdate}
          label={this.props.label}
          valid={this.props.valid}
        />
      </div>
    )
  }

}

export default Terms
