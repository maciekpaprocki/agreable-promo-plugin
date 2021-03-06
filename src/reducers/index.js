import { combineReducers } from 'redux'

import {
  UPDATE_FIELD,
  UPDATE_CHECKBOX,
  CLEAR_FIELD,
  VALIDATE_FIELD,
  NEXT_SCREEN,
  PREV_SCREEN,
  ScreenNames
} from '../actions'

// Something
import * as validators from '../validators'

import { standardScreenOrder, competitionScreenOrder } from '../screen-order'

const {
  ENTER_SCREEN,
  FORM_SCREEN,
  COMPETITION_SCREEN,
  THANK_YOU_SCREEN
} = ScreenNames

function userData(state, action) {
  // Note "state is "userData" object
  switch (action.type) {

  case UPDATE_FIELD:

    // If this field doesn't have a validotor,
    // just update the sate
    if (!state[action.name].validator) {
      return Object.assign({}, state, {
        [action.name]: Object.assign({}, state[action.name], {
          pristine: false,
          dirty: true,
          value: action.value
        })
      })

    // If this action does have a validator, then check the validity
    } else if (state[action.name].validator) {
      return Object.assign({}, state, {
        [action.name]: Object.assign({}, state[action.name], {
          value: action.value,
          pristine: false,
          dirty: true,
          valid: validators[state[action.name].validator](action.value)
        })
      })
    }

  case UPDATE_CHECKBOX:
    return Object.assign({}, state, {
      [action.name]: Object.assign({}, state[action.name], {
        value: !state[action.name].value,
        valid: state[action.name].validator ? !state[action.name].value : true
      })
    })

  case CLEAR_FIELD:
    return Object.assign({}, state, {
      [action.name]: Object.assign({}, state[action.name], {
        value: false
      })
    })

  default:
    return state
  }
}

function screen(state = initialState.screen, action) {

  switch (action.type) {

  case NEXT_SCREEN:
    return Object.assign({}, state,
      { screenIndex: state.screenIndex + 1 },
      { currentScreen: state.screenList[state.screenIndex + 1] }
    )

  case PREV_SCREEN:
    return Object.assign({}, state,
      { screenIndex: state.screenIndex - 1 },
      { currentScreen: state.screenList[state.screenIndex - 1] }
    )

  default:
    return state
  }

}

export default function promotionsApp(state = initialState, action) {
  return Object.assign({}, state,
    { userData: userData(state.userData, action) },
    { screen: screen(state.screen, action) }
  )
}
